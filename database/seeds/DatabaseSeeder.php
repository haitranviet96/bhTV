<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $client;
    private $apiKey = 'e9a3b7a2a6f767e8e498d283ec58a1c9';
    private $genres = array();
    private $genreId;
    private $movieId;
    private $celebId;
    private $moviesIDs = array();
    private $celebIDs = array();

    function __construct()
    {
        $this->client = new GuzzleHttp\Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.themoviedb.org/3/',
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $res = $this->client->get('genre/movie/list?api_key=' . $this->apiKey . '&language=en-US');
        if ($res->getStatusCode() == 200) {
            $this->genres = json_decode($res->getBody(), true);
            $i = 0;
            foreach ($this->genres['genres'] as $genre) {
                // add to genre table
                echo ++$i . "." . $genre['name'] . "\n";
                // request 2 pages of each genre
                $res = $this->client->get('genre/' . $genre['id'] . '/movies?api_key=' . $this->apiKey . '&language=en-US&include_adult=true&sort_by=created_at.asc');
                $this->requestMovies($res, $genre);
            }
        }

        $user = new UserTableSeeder();
        $user->run();

        $comment = new CommentTableSeeder;
        $comment->run();

        $rate = new RatesTableSeeder();
        $rate->run();
    }

    private function requestMovies(Psr\Http\Message\ResponseInterface $res, $genre = NULL)
    {
        if ($res->getStatusCode() == 200) {
            $movies = json_decode($res->getBody(), true);
            // add movies table if not exists
            if ($genre != NULL)
                $this->genreId = DB::table('genres')
                    ->insertGetId(['name' => $genre['name'], 'img_path' => $this->getImgPath(reset($movies['results'])['poster_path'])]);
            foreach ($movies['results'] as $movie) {
                if (in_array($movie['id'], $this->moviesIDs)) {
                    echo $movie['title'];
                    $this->movieId = DB::table('films')
                        ->where([
                            ['name', 'like', $movie['original_title']],
                            ['released_date', '=', $movie['release_date']],
                        ])->value('id');
                } else {
                    array_push($this->moviesIDs, $movie['id']);
                    echo $movie['original_title'] . " [" . $movie['id'] . "]";
                    // add movies to db
                    $this->movieId = $this->addMovie($movie['id']);
                    // request celebs api
                    $this->requestCelebs($movie['id']);
                    echo "\n";
                }
                DB::table('genre_film')
                    ->insert(['film_id' => $this->movieId, 'genre_id' => $this->genreId]);
            }
        }
    }

    private function addMovie($movieId)
    {
        // get movie detail
        do {
            $res = $this->client->get('movie/' . $movieId . '?api_key=' . $this->apiKey . '&language=en-US');
            $status = $res->getStatusCode();
            if ($status != 200) echo "Network Error: " . $status . "\n";
        } while ($status != 200);
        $movieNewId = -1;
        $movieDetail = json_decode($res->getBody(), true);

        // get release_date
        do {
            $res = $this->client->get('movie/' . $movieId . '/release_dates?api_key=' . $this->apiKey . '&language=en-US');
            $status = $res->getStatusCode();
            if ($status != 200) echo "Network Error: " . $status . "\n";
        } while ($status != 200);

        // get trailer
        $release_results = json_decode($res->getBody(), true)['results'];
        do {
            $res = $this->client->get('movie/' . $movieId . '/videos?api_key=' . $this->apiKey . '&language=en-US');
            $status = $res->getStatusCode();
            if ($status != 200) echo "Network Error: " . $status . "\n";
        } while ($status != 200);
        $video_results = json_decode($res->getBody(), true)['results'];
        foreach ($video_results as $video) {
            if ($video['type'] == 'Trailer') {
                $trailer_key = $video['key'];
                break;
            }
        }

        // add movie
        foreach ($release_results as $result) {
            if ($result['iso_3166_1'] == "US") {
                $mat_rate = in_array($result['release_dates'][0]['certification'], array("PG-13", "R", "PG", "G")) ?
                    $result['release_dates'][0]['certification'] : NULL;
                $movieNewId = DB::table('films')
                    ->insertGetId(['name' => $movieDetail['original_title'],
                        'released_date' => $movieDetail['release_date'],
                        'description' => $movieDetail['overview'],
                        'img_path' => $movieDetail['poster_path'] != NULL ?
                            $this->getImgPath($movieDetail['poster_path']) : NULL,
                        'trailer_path' => isset($trailer_key) ? $this->getTrailerPath($trailer_key) : NULL,
                        'length' => $movieDetail['runtime'],
                        'avg_rate' => $movieDetail['vote_average'],
                        'mat_rate' => $mat_rate,
                        'popular' => $movieDetail['popularity']]);
                break;
            }
        }
        if ($movieNewId == -1)
            $movieNewId = DB::table('films')
                ->insertGetId(['name' => $movieDetail['original_title'],
                    'released_date' => $movieDetail['release_date'],
                    'description' => $movieDetail['overview'],
                    'img_path' => $this->getImgPath($movieDetail['poster_path']),
                    'length' => $movieDetail['runtime'],
                    'avg_rate' => $movieDetail['vote_average'],
                    'popular' => $movieDetail['popularity']]);
        return $movieNewId;
    }

    private function requestCelebs($movieId)
    {
        do {
            $res = $this->client->get('movie/' . $movieId . '/credits?api_key=' . $this->apiKey);
            $status = $res->getStatusCode();
            if ($status != 200) echo "Network Error: " . $status . "\n";
        } while ($status != 200);
        $result = json_decode($res->getBody(), true);
        // add celebs if not exists
        echo " - Cast: ";
        $i = 0;
        foreach ($result['cast'] as $cast) {
            if (in_array($cast['id'], $this->celebIDs)) {
                $this->celebId = DB::table('celebs')
                    ->where('name', 'like', $cast['name'])->value('id');
            } else {
                array_push($this->celebIDs, $cast['id']);
                echo $cast['name'];
                $this->celebId = $this->addCelebs($cast['id']);
            }
            if (++$i == 5) break;
            else echo ", ";
            // GO-TO: add element to actor_film
            DB::table('actor_film')
                ->insert(['film_id' => $this->movieId,
                    'actor_id' => $this->celebId,
                    'role' => substr($cast['character'], 0, 254)]);
        }
        echo "; Director: ";
        foreach ($result['crew'] as $crew) {
            if ($crew['job'] === 'Director') {
                if (in_array($crew['id'], $this->celebIDs)) {
                    $this->celebId = DB::table('celebs')
                        ->where('name', 'like', $crew['name'])->value('id');
                } else {
                    array_push($this->celebIDs, $crew['id']);
                    echo $crew['name'];
                    $this->celebId = $this->addCelebs($crew['id']);
                }
                //GO-TO: add element to director_film
                DB::table('director_film')
                    ->insert(['film_id' => $this->movieId,
                        'dir_id' => $this->celebId]);
            }
        }
    }

    private function addCelebs($celebId)
    {
        do {
            $res = $this->client->get('person/' . $celebId . '?api_key=' . $this->apiKey . '&language=en-US');
            $status = $res->getStatusCode();
            if ($status != 200) echo "Network Error: " . $status . "\n";
        } while ($status != 200);
        $celebDetail = json_decode($res->getBody(), true);
        $celebNewId = DB::table('celebs')
            ->insertGetId(['name' => $celebDetail['name'],
                'dob' => isset($celebDetail['birthday']) ? $celebDetail['birthday'] : null,
                'pob' => isset($celebDetail['place_of_birth']) ? $celebDetail['place_of_birth'] : null,
                'gender' => $celebDetail['gender'],
                'img_path' => isset($celebDetail['profile_path']) ? $this->getImgPath($celebDetail['profile_path']) : null,
                'bio' => $celebDetail['biography']]);
        return $celebNewId;
    }

    private function getImgPath($string)
    {
        return 'https://image.tmdb.org/t/p/w500' . $string;
    }

    private function getTrailerPath($id)
    {
        return 'https://www.youtube.com/watch?v=' . $id;
    }
}
