@extends('layouts.default')

@section('title','Discover')

@section('content')
<section class="bg-primary" id="discover">
    <div class="container">

        <div class="row">
            <h2 class="margin-top-1 text-primary">Discover New Movies</h2>
            <hr class="primary">
    <style>
        #year-list.k-list-container, #sort_by-list.k-list-container, #with_genres-list.k-list-container, #with_keyowrds-list.k-list-container {
            border-color: #f5f5f5;
        }
    </style>

    <form id="discover">
        <input id="vote_count" type="hidden" name="vote_count.gte" value="0">
        <input id="list_style" type="hidden" name="list_style" value="1">

        <span class="search_element full">
    <label for="primary_release_year">Year</label>

    <span title="" class="k-widget k-dropdown k-header" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="year_listbox" aria-disabled="false" aria-busy="false" style="width: 100px;" aria-activedescendant="7783dbdf-b0d2-4db8-88de-7269f516f877"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input">2017</span><span unselectable="on" class="k-select" aria-label="select"><span class="k-icon k-i-arrow-60-down"></span></span></span><select id="year" name="primary_release_year" style="width: 100px; display: none;" data-role="dropdownlist"><option value="0">None</option><option value="2018">2018</option><option value="2017" selected="selected">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select></span>

  </span>

        <span class="search_element full">
    <label for="sort_by" id="sort_by_label">Sort By</label>
    <span title="" class="k-widget k-dropdown k-header" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="sort_by_listbox" aria-labelledby="sort_by_label" aria-disabled="false" aria-busy="false" style="width: 200px;" aria-activedescendant="a6f790d6-3acb-40d0-92d7-2f42e9a495da"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input">Popularity Descending</span><span unselectable="on" class="k-select" aria-label="select"><span class="k-icon k-i-arrow-60-down"></span></span></span><select id="sort_by" name="sort_by" style="width: 200px; display: none;" data-role="dropdownlist"><option value="popularity.desc" selected="selected">Popularity Descending</option><option value="popularity.asc">Popularity Ascending</option><option value="vote_average.desc">Rating Descending</option><option value="vote_average.asc">Rating Ascending</option><option value="primary_release_date.desc">Release Date Descending</option><option value="primary_release_date.asc">Release Date Ascending</option><option value="title.asc">Title (A-Z)</option><option value="title.desc">Title (Z-A)</option></select></span>
  </span>

        <span class="search_element full">
    <label for="with_genres" id="with_genres_label">Genres</label>
    <div class="k-widget k-multiselect k-header no_pad k-multiselect-clearable" deselectable="on" title="" style="width: 260px;"><div class="k-multiselect-wrap k-floatwrap" deselectable="on"><ul role="listbox" deselectable="on" class="k-reset" id="with_genres_taglist"></ul><input class="k-input k-readonly" style="width: 138.766px;" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" tabindex="0" aria-owns="with_genres_taglist with_genres_listbox" aria-labelledby="with_genres_label" aria-disabled="false" aria-activedescendant="14d277c3-6553-4c83-a79f-6d89dd3c2285" aria-busy="false"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span></div><select id="with_genres" class="no_pad" style="width: 260px; display: none;" name="with_genres[]" multiple="multiple" data-role="multiselect" aria-disabled="false"><option value="28">Action</option><option value="12">Adventure</option><option value="16">Animation</option><option value="35">Comedy</option><option value="80">Crime</option><option value="99">Documentary</option><option value="18">Drama</option><option value="10751">Family</option><option value="14">Fantasy</option><option value="36">History</option><option value="27">Horror</option><option value="10402">Music</option><option value="9648">Mystery</option><option value="10749">Romance</option><option value="878">Science Fiction</option><option value="10770">TV Movie</option><option value="53">Thriller</option><option value="10752">War</option><option value="37">Western</option></select><span style="font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 500; letter-spacing: normal; text-transform: none; line-height: 33.1429px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;">Filter by genres...</span></div>
  </span>



        <span class="search_element">
      <label for="with_keywords" id="with_keywords_label">Keywords</label>
      <div class="k-widget k-multiselect k-header k-multiselect-clearable" deselectable="on" title="" style="width: 260px;"><div class="k-multiselect-wrap k-floatwrap" deselectable="on"><ul role="listbox" deselectable="on" class="k-reset" id="with_keywords_taglist"></ul><input class="k-input k-readonly" style="width: 158.406px;" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" tabindex="0" aria-owns="with_keywords_taglist with_keywords_listbox" aria-labelledby="with_keywords_label" aria-disabled="false"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span></div><select id="with_keywords" style="width: 260px; display: none;" name="with_keywords[]" multiple="multiple" data-role="multiselect" aria-disabled="false">

      </select><span style="font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 16px; font-stretch: 100%; font-style: normal; font-weight: 500; letter-spacing: normal; text-transform: none; line-height: 33.1429px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;">Filter by keywords...</span></div>
    </span>



        <div style="clear: left;"></div>
    </form>

    <div class="results flex results_poster_card">

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_354912" class="result" href="/movie/354912" title="Coco" alt="Coco">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg 2x" alt="Coco" sizes="185px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eKi8dIrr8voobbaGzDpe8w0PVbC.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_55d1c092c3a3681bf0009279_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 3</p>
              <p>Last Week: 5</p>
            </div>
          </span>
                        <span id="popularity_55d1c092c3a3681bf0009279" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_55d1c092c3a3681bf0009279" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_55d1c092c3a3681bf0009279" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 55d1c092c3a3681bf0009279" data-percent="78.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r78"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_354912" class="title result" href="/movie/354912" title="Coco" alt="Coco">Coco</a>
                        <span>October 27, 2017</span>
                    </div>
                </div>
                <p class="overview">Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplished musician like his idol, Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning…</p>
                <p class="view_more"><a id="movie_354912" class="result" href="/movie/354912" title="Coco" alt="Coco">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.55d1c092c3a3681bf0009279').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_181808" class="result" href="/movie/181808" title="Star Wars: The Last Jedi" alt="Star Wars: The Last Jedi">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg 2x" alt="Star Wars: The Last Jedi" sizes="185px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_51589cc619c2956e650dca36_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 5</p>
              <p>Last Week: 3</p>
            </div>
          </span>
                        <span id="popularity_51589cc619c2956e650dca36" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_51589cc619c2956e650dca36" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_51589cc619c2956e650dca36" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 51589cc619c2956e650dca36" data-percent="71.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r71"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_181808" class="title result" href="/movie/181808" title="Star Wars: The Last Jedi" alt="Star Wars: The Last Jedi">Star Wars: The Last Jedi</a>
                        <span>December 13, 2017</span>
                    </div>
                </div>
                <p class="overview">Rey develops her newly discovered abilities with the guidance of Luke Skywalker, who is unsettled by the strength of her powers. Meanwhile, the Resistance prepares to do battle with the First Order.</p>
                <p class="view_more"><a id="movie_181808" class="result" href="/movie/181808" title="Star Wars: The Last Jedi" alt="Star Wars: The Last Jedi">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.51589cc619c2956e650dca36').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_321612" class="result" href="/movie/321612" title="Beauty and the Beast" alt="Beauty and the Beast">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/tWqifoYuwLETmmasnGHO7xBjEtt.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/tWqifoYuwLETmmasnGHO7xBjEtt.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/tWqifoYuwLETmmasnGHO7xBjEtt.jpg 2x" alt="Beauty and the Beast" sizes="185px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/tWqifoYuwLETmmasnGHO7xBjEtt.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/tWqifoYuwLETmmasnGHO7xBjEtt.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/tWqifoYuwLETmmasnGHO7xBjEtt.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_54c7e0bdc3a36874bf0046fb_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 7</p>
              <p>Last Week: 11</p>
            </div>
          </span>
                        <span id="popularity_54c7e0bdc3a36874bf0046fb" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_54c7e0bdc3a36874bf0046fb" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_54c7e0bdc3a36874bf0046fb" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 54c7e0bdc3a36874bf0046fb" data-percent="68.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r68"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_321612" class="title result" href="/movie/321612" title="Beauty and the Beast" alt="Beauty and the Beast">Beauty and the Beast</a>
                        <span>March 16, 2017</span>
                    </div>
                </div>
                <p class="overview">A live-action adaptation of Disney's version of the classic tale of a cursed prince and a beautiful young woman who helps him break the spell.</p>
                <p class="view_more"><a id="movie_321612" class="result" href="/movie/321612" title="Beauty and the Beast" alt="Beauty and the Beast">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.54c7e0bdc3a36874bf0046fb').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_284053" class="result" href="/movie/284053" title="Thor: Ragnarok" alt="Thor: Ragnarok">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg 2x" alt="Thor: Ragnarok" sizes="185px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_53d5f8190e0a26283e006d52_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 10</p>
              <p>Last Week: 8</p>
            </div>
          </span>
                        <span id="popularity_53d5f8190e0a26283e006d52" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_53d5f8190e0a26283e006d52" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_53d5f8190e0a26283e006d52" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 53d5f8190e0a26283e006d52" data-percent="74.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r74"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_284053" class="title result" href="/movie/284053" title="Thor: Ragnarok" alt="Thor: Ragnarok">Thor: Ragnarok</a>
                        <span>October 25, 2017</span>
                    </div>
                </div>
                <p class="overview">Thor is being imprisoned by Asgard's old enemy Surtur. Surtur wishes for the destruction of Asgard and the deaths of its people. An unsuspecting relative comes to Asgard claiming to be the rightful owner of the…</p>
                <p class="view_more"><a id="movie_284053" class="result" href="/movie/284053" title="Thor: Ragnarok" alt="Thor: Ragnarok">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.53d5f8190e0a26283e006d52').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_353616" class="result" href="/movie/353616" title="Pitch Perfect 3" alt="Pitch Perfect 3">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/fchHLsLjFvzAFSQykiMwdF1051.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/fchHLsLjFvzAFSQykiMwdF1051.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/fchHLsLjFvzAFSQykiMwdF1051.jpg 2x" alt="Pitch Perfect 3" sizes="185px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/fchHLsLjFvzAFSQykiMwdF1051.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/fchHLsLjFvzAFSQykiMwdF1051.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/fchHLsLjFvzAFSQykiMwdF1051.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_55c6312ec3a3682490000226_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 11</p>
              <p>Last Week: 24</p>
            </div>
          </span>
                        <span id="popularity_55c6312ec3a3682490000226" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_55c6312ec3a3682490000226" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_55c6312ec3a3682490000226" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 55c6312ec3a3682490000226" data-percent="64.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r64"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_353616" class="title result" href="/movie/353616" title="Pitch Perfect 3" alt="Pitch Perfect 3">Pitch Perfect 3</a>
                        <span>December 21, 2017</span>
                    </div>
                </div>
                <p class="overview">After the highs of winning the world championships, the Bellas find themselves split apart and discovering there aren't job prospects for making music with your mouth. But when they get the chance to reunite for…</p>
                <p class="view_more"><a id="movie_353616" class="result" href="/movie/353616" title="Pitch Perfect 3" alt="Pitch Perfect 3">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.55c6312ec3a3682490000226').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_141052" class="result" href="/movie/141052" title="Justice League" alt="Justice League">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eifGNCSDuxJeS1loAXil5bIGgvC.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eifGNCSDuxJeS1loAXil5bIGgvC.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/eifGNCSDuxJeS1loAXil5bIGgvC.jpg 2x" alt="Justice League" sizes="185px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eifGNCSDuxJeS1loAXil5bIGgvC.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/eifGNCSDuxJeS1loAXil5bIGgvC.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/eifGNCSDuxJeS1loAXil5bIGgvC.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_5093e69c760ee3796f000c7d_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 12</p>
              <p>Last Week: 13</p>
            </div>
          </span>
                        <span id="popularity_5093e69c760ee3796f000c7d" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_5093e69c760ee3796f000c7d" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_5093e69c760ee3796f000c7d" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 5093e69c760ee3796f000c7d" data-percent="64.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r64"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_141052" class="title result" href="/movie/141052" title="Justice League" alt="Justice League">Justice League</a>
                        <span>November 15, 2017</span>
                    </div>
                </div>
                <p class="overview">Fuelled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne and Diana Prince assemble a team of metahumans consisting of Barry Allen, Arthur Curry and Victor Stone to face the…</p>
                <p class="view_more"><a id="movie_141052" class="result" href="/movie/141052" title="Justice League" alt="Justice League">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.5093e69c760ee3796f000c7d').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_347882" class="result" href="/movie/347882" title="Sleight" alt="Sleight">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/wridRvGxDqGldhzAIh3IcZhHT5F.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/wridRvGxDqGldhzAIh3IcZhHT5F.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/wridRvGxDqGldhzAIh3IcZhHT5F.jpg 2x" alt="Sleight" sizes="63px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/wridRvGxDqGldhzAIh3IcZhHT5F.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/wridRvGxDqGldhzAIh3IcZhHT5F.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/wridRvGxDqGldhzAIh3IcZhHT5F.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_559c8958c3a3681bec00074e_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 13</p>
              <p>Last Week: 7</p>
            </div>
          </span>
                        <span id="popularity_559c8958c3a3681bec00074e" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_559c8958c3a3681bec00074e" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_559c8958c3a3681bec00074e" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 559c8958c3a3681bec00074e" data-percent="52.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r52"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_347882" class="title result" href="/movie/347882" title="Sleight" alt="Sleight">Sleight</a>
                        <span>April 28, 2017</span>
                    </div>
                </div>
                <p class="overview">A young street magician is left to take care of his little sister after his mother's passing and turns to drug dealing in the Los Angeles party scene to keep a roof over their heads. When he gets into trouble with…</p>
                <p class="view_more"><a id="movie_347882" class="result" href="/movie/347882" title="Sleight" alt="Sleight">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.559c8958c3a3681bec00074e').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_399055" class="result" href="/movie/399055" title="The Shape of Water" alt="The Shape of Water">



                    <img class="poster fade lazyautosizes lazyloaded" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/k4FwHlMhuRR5BISY2Gm2QZHlH5Q.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/k4FwHlMhuRR5BISY2Gm2QZHlH5Q.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/k4FwHlMhuRR5BISY2Gm2QZHlH5Q.jpg 2x" alt="The Shape of Water" sizes="145px" srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/k4FwHlMhuRR5BISY2Gm2QZHlH5Q.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/k4FwHlMhuRR5BISY2Gm2QZHlH5Q.jpg 2x" src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/k4FwHlMhuRR5BISY2Gm2QZHlH5Q.jpg">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_574482aac3a368076b00096f_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 17</p>
              <p>Last Week: 10</p>
            </div>
          </span>
                        <span id="popularity_574482aac3a368076b00096f" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_574482aac3a368076b00096f" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_574482aac3a368076b00096f" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 574482aac3a368076b00096f" data-percent="73.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r73"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_399055" class="title result" href="/movie/399055" title="The Shape of Water" alt="The Shape of Water">The Shape of Water</a>
                        <span>December  1, 2017</span>
                    </div>
                </div>
                <p class="overview">An other-worldly story, set against the backdrop of Cold War era America circa 1962, where a mute janitor working at a lab falls in love with an amphibious man being held captive there and devises a plan to help…</p>
                <p class="view_more"><a id="movie_399055" class="result" href="/movie/399055" title="The Shape of Water" alt="The Shape of Water">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.574482aac3a368076b00096f').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_263115" class="result" href="/movie/263115" title="Logan" alt="Logan">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/gGBu0hKw9BGddG8RkRAMX7B6NDB.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/gGBu0hKw9BGddG8RkRAMX7B6NDB.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/gGBu0hKw9BGddG8RkRAMX7B6NDB.jpg 2x" alt="Logan">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_533fea440e0a262b2900123b_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 21</p>
              <p>Last Week: 26</p>
            </div>
          </span>
                        <span id="popularity_533fea440e0a262b2900123b" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_533fea440e0a262b2900123b" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_533fea440e0a262b2900123b" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 533fea440e0a262b2900123b" data-percent="77.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r77"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_263115" class="title result" href="/movie/263115" title="Logan" alt="Logan">Logan</a>
                        <span>February 28, 2017</span>
                    </div>
                </div>
                <p class="overview">In the near future, a weary Logan cares for an ailing Professor X in a hideout on the Mexican border. But Logan's attempts to hide from the world and his legacy are upended when a young mutant arrives, pursued by…</p>
                <p class="view_more"><a id="movie_263115" class="result" href="/movie/263115" title="Logan" alt="Logan">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.533fea440e0a262b2900123b').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_335984" class="result" href="/movie/335984" title="Blade Runner 2049" alt="Blade Runner 2049">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/gajva2L0rPYkEWjzgFlBXCAVBE5.jpg 2x" alt="Blade Runner 2049">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_552f04eb92514138380039ab_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 25</p>
              <p>Last Week: 18</p>
            </div>
          </span>
                        <span id="popularity_552f04eb92514138380039ab" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_552f04eb92514138380039ab" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_552f04eb92514138380039ab" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 552f04eb92514138380039ab" data-percent="73.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r73"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_335984" class="title result" href="/movie/335984" title="Blade Runner 2049" alt="Blade Runner 2049">Blade Runner 2049</a>
                        <span>October  4, 2017</span>
                    </div>
                </div>
                <p class="overview">Thirty years after the events of the first film, a new blade runner, LAPD Officer K, unearths a long-buried secret that has the potential to plunge what's left of society into chaos. K's discovery leads him on a…</p>
                <p class="view_more"><a id="movie_335984" class="result" href="/movie/335984" title="Blade Runner 2049" alt="Blade Runner 2049">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.552f04eb92514138380039ab').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_353486" class="result" href="/movie/353486" title="Jumanji: Welcome to the Jungle" alt="Jumanji: Welcome to the Jungle">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/bXrZ5iHBEjH7WMidbUDQ0U2xbmr.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/bXrZ5iHBEjH7WMidbUDQ0U2xbmr.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/bXrZ5iHBEjH7WMidbUDQ0U2xbmr.jpg 2x" alt="Jumanji: Welcome to the Jungle">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_55c4dd3b92514142920001fd_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 28</p>
              <p>Last Week: 17</p>
            </div>
          </span>
                        <span id="popularity_55c4dd3b92514142920001fd" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_55c4dd3b92514142920001fd" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_55c4dd3b92514142920001fd" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 55c4dd3b92514142920001fd" data-percent="65.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r65"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_353486" class="title result" href="/movie/353486" title="Jumanji: Welcome to the Jungle" alt="Jumanji: Welcome to the Jungle">Jumanji: Welcome to the Jungle</a>
                        <span>December  9, 2017</span>
                    </div>
                </div>
                <p class="overview">The tables are turned as four teenagers are sucked into Jumanji's world - pitted against rhinos, black mambas and an endless variety of jungle traps and puzzles. To survive, they'll play as characters from the game.</p>
                <p class="view_more"><a id="movie_353486" class="result" href="/movie/353486" title="Jumanji: Welcome to the Jungle" alt="Jumanji: Welcome to the Jungle">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.55c4dd3b92514142920001fd').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_483877" class="result" href="/movie/483877" title="15+ IQ Krachoot" alt="15+ IQ Krachoot">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/1RxnEJzXYv5GgPszbHNsWTXPC6M.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/1RxnEJzXYv5GgPszbHNsWTXPC6M.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/1RxnEJzXYv5GgPszbHNsWTXPC6M.jpg 2x" alt="15+ IQ Krachoot">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_59f485039251414d33011e5f_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 29</p>
              <p>Last Week: 28</p>
            </div>
          </span>
                        <span id="popularity_59f485039251414d33011e5f" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_59f485039251414d33011e5f" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_59f485039251414d33011e5f" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 59f485039251414d33011e5f" data-percent="60.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r60"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_483877" class="title result" href="/movie/483877" title="15+ IQ Krachoot" alt="15+ IQ Krachoot">15+ IQ Krachoot</a>
                        <span>August  3, 2017</span>
                    </div>
                </div>
                <p class="overview">A teenage comedy film about a young Yorkie. "Rising" opened the first movie on screen.  The story of fun gangs of teenage age 15+ hormones gurgling at the curiosity to try on their love and sex has spread out.</p>
                <p class="view_more"><a id="movie_483877" class="result" href="/movie/483877" title="15+ IQ Krachoot" alt="15+ IQ Krachoot">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.59f485039251414d33011e5f').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_316029" class="result" href="/movie/316029" title="The Greatest Showman" alt="The Greatest Showman">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/b9CeobiihCx1uG1tpw8hXmpi7nm.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/b9CeobiihCx1uG1tpw8hXmpi7nm.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/b9CeobiihCx1uG1tpw8hXmpi7nm.jpg 2x" alt="The Greatest Showman">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_54ac549792514156790044d7_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 35</p>
              <p>Last Week: 27</p>
            </div>
          </span>
                        <span id="popularity_54ac549792514156790044d7" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_54ac549792514156790044d7" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_54ac549792514156790044d7" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 54ac549792514156790044d7" data-percent="80.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r80"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_316029" class="title result" href="/movie/316029" title="The Greatest Showman" alt="The Greatest Showman">The Greatest Showman</a>
                        <span>December 20, 2017</span>
                    </div>
                </div>
                <p class="overview">The story of American showman P.T. Barnum, founder of the circus that became the famous traveling Ringling Bros. and Barnum &amp; Bailey Circus.</p>
                <p class="view_more"><a id="movie_316029" class="result" href="/movie/316029" title="The Greatest Showman" alt="The Greatest Showman">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.54ac549792514156790044d7').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_392044" class="result" href="/movie/392044" title="Murder on the Orient Express" alt="Murder on the Orient Express">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/iBlfxlw8qwtUS0R8YjIU7JtM6LM.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/iBlfxlw8qwtUS0R8YjIU7JtM6LM.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/iBlfxlw8qwtUS0R8YjIU7JtM6LM.jpg 2x" alt="Murder on the Orient Express">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_5708ac22c3a3681d32002054_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 41</p>
              <p>Last Week: 31</p>
            </div>
          </span>
                        <span id="popularity_5708ac22c3a3681d32002054" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_5708ac22c3a3681d32002054" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_5708ac22c3a3681d32002054" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 5708ac22c3a3681d32002054" data-percent="67.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r67"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_392044" class="title result" href="/movie/392044" title="Murder on the Orient Express" alt="Murder on the Orient Express">Murder on the Orient Express</a>
                        <span>November  3, 2017</span>
                    </div>
                </div>
                <p class="overview">Genius Belgian detective Hercule Poirot investigates the murder of an American tycoon aboard the Orient Express train.</p>
                <p class="view_more"><a id="movie_392044" class="result" href="/movie/392044" title="Murder on the Orient Express" alt="Murder on the Orient Express">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.5708ac22c3a3681d32002054').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_479363" class="result" href="/movie/479363" title="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders" alt="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/cGhdduplj8YdAwg7iPCeGjO1YvZ.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/cGhdduplj8YdAwg7iPCeGjO1YvZ.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/cGhdduplj8YdAwg7iPCeGjO1YvZ.jpg 2x" alt="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_59d39c1792514140af012a36_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 45</p>
              <p>Last Week: 49</p>
            </div>
          </span>
                        <span id="popularity_59d39c1792514140af012a36" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_59d39c1792514140af012a36" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_59d39c1792514140af012a36" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 59d39c1792514140af012a36" data-percent="0.0" data-track-color="#666666" data-bar-color="#d4d4d4">
                                <div class="percent">

                                    <span class="icon icon-rNR"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_479363" class="title result" href="/movie/479363" title="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders" alt="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders">Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders</a>
                        <span>December  9, 2017</span>
                    </div>
                </div>
                <p class="overview">Kamen Riders Build and Ex-Aid team up with the legendary heroes of the Heisei Generation - OOO, Fourze, Gaim, and Ghost.</p>
                <p class="view_more"><a id="movie_479363" class="result" href="/movie/479363" title="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders" alt="Kamen Rider Heisei Generations FINAL: Build &amp; Ex-Aid with Legend Riders">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.59d39c1792514140af012a36').easyPieChart({
                        lineCap: 'butt',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_343668" class="result" href="/movie/343668" title="Kingsman: The Golden Circle" alt="Kingsman: The Golden Circle">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/34xBL6BXNYFqtHO9zhcgoakS4aP.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/34xBL6BXNYFqtHO9zhcgoakS4aP.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/34xBL6BXNYFqtHO9zhcgoakS4aP.jpg 2x" alt="Kingsman: The Golden Circle">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_5573c453c3a36838d300593c_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 48</p>
              <p>Last Week: 54</p>
            </div>
          </span>
                        <span id="popularity_5573c453c3a36838d300593c" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_5573c453c3a36838d300593c" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_5573c453c3a36838d300593c" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 5573c453c3a36838d300593c" data-percent="70.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r70"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_343668" class="title result" href="/movie/343668" title="Kingsman: The Golden Circle" alt="Kingsman: The Golden Circle">Kingsman: The Golden Circle</a>
                        <span>September 20, 2017</span>
                    </div>
                </div>
                <p class="overview">When an attack on the Kingsman headquarters takes place and a new villain rises, Eggsy and Merlin are forced to work together with the American agency known as the Statesman to save the world.</p>
                <p class="view_more"><a id="movie_343668" class="result" href="/movie/343668" title="Kingsman: The Golden Circle" alt="Kingsman: The Golden Circle">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.5573c453c3a36838d300593c').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_166426" class="result" href="/movie/166426" title="Pirates of the Caribbean: Dead Men Tell No Tales" alt="Pirates of the Caribbean: Dead Men Tell No Tales">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/xbpSDU3p7YUGlu9Mr6Egg2Vweto.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/xbpSDU3p7YUGlu9Mr6Egg2Vweto.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/xbpSDU3p7YUGlu9Mr6Egg2Vweto.jpg 2x" alt="Pirates of the Caribbean: Dead Men Tell No Tales">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_5114189319c29539d324016c_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 49</p>
              <p>Last Week: 41</p>
            </div>
          </span>
                        <span id="popularity_5114189319c29539d324016c" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_5114189319c29539d324016c" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_5114189319c29539d324016c" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 5114189319c29539d324016c" data-percent="65.0" data-track-color="#423d0f" data-bar-color="#d2d531">
                                <div class="percent">

                                    <span class="icon icon-r65"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_166426" class="title result" href="/movie/166426" title="Pirates of the Caribbean: Dead Men Tell No Tales" alt="Pirates of the Caribbean: Dead Men Tell No Tales">Pirates of the Caribbean: Dead Men Tell No Tales</a>
                        <span>May 23, 2017</span>
                    </div>
                </div>
                <p class="overview">Thrust into an all-new adventure, a down-on-his-luck Capt. Jack Sparrow feels the winds of ill-fortune blowing even more strongly when deadly ghost sailors led by his old nemesis, the evil Capt. Salazar, escape…</p>
                <p class="view_more"><a id="movie_166426" class="result" href="/movie/166426" title="Pirates of the Caribbean: Dead Men Tell No Tales" alt="Pirates of the Caribbean: Dead Men Tell No Tales">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.5114189319c29539d324016c').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_374720" class="result" href="/movie/374720" title="Dunkirk" alt="Dunkirk">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/ebSnODDg9lbsMIaWg2uAbjn7TO5.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/ebSnODDg9lbsMIaWg2uAbjn7TO5.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/ebSnODDg9lbsMIaWg2uAbjn7TO5.jpg 2x" alt="Dunkirk">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_56819c8a9251417def011cb1_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 51</p>
              <p>Last Week: 58</p>
            </div>
          </span>
                        <span id="popularity_56819c8a9251417def011cb1" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_56819c8a9251417def011cb1" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_56819c8a9251417def011cb1" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 56819c8a9251417def011cb1" data-percent="74.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r74"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_374720" class="title result" href="/movie/374720" title="Dunkirk" alt="Dunkirk">Dunkirk</a>
                        <span>July 19, 2017</span>
                    </div>
                </div>
                <p class="overview">The story of the miraculous evacuation of Allied soldiers from Belgium, Britain, Canada and France, who were cut off and surrounded by the German army from the beaches and harbour of Dunkirk between May 26th and…</p>
                <p class="view_more"><a id="movie_374720" class="result" href="/movie/374720" title="Dunkirk" alt="Dunkirk">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.56819c8a9251417def011cb1').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_359940" class="result" href="/movie/359940" title="Three Billboards Outside Ebbing, Missouri" alt="Three Billboards Outside Ebbing, Missouri">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/vgvw6w1CtcFkuXXn004S5wQsHRl.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/vgvw6w1CtcFkuXXn004S5wQsHRl.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/vgvw6w1CtcFkuXXn004S5wQsHRl.jpg 2x" alt="Three Billboards Outside Ebbing, Missouri">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_55f743a9c3a3686d0300b79b_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 54</p>
              <p>Last Week: 34</p>
            </div>
          </span>
                        <span id="popularity_55f743a9c3a3686d0300b79b" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_55f743a9c3a3686d0300b79b" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_55f743a9c3a3686d0300b79b" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 55f743a9c3a3686d0300b79b" data-percent="82.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r82"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_359940" class="title result" href="/movie/359940" title="Three Billboards Outside Ebbing, Missouri" alt="Three Billboards Outside Ebbing, Missouri">Three Billboards Outside Ebbing, Missouri</a>
                        <span>November 10, 2017</span>
                    </div>
                </div>
                <p class="overview">After seven months have passed without a culprit in her daughter's murder case, Mildred Hayes makes a bold move, painting three signs leading into her town with a controversial message directed at Bill Willoughby…</p>
                <p class="view_more"><a id="movie_359940" class="result" href="/movie/359940" title="Three Billboards Outside Ebbing, Missouri" alt="Three Billboards Outside Ebbing, Missouri">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.55f743a9c3a3686d0300b79b').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>

        <div class="item poster card">
            <div class="image_content">
                <a id="movie_315635" class="result" href="/movie/315635" title="Spider-Man: Homecoming" alt="Spider-Man: Homecoming">



                    <img class="poster lazyload fade" data-sizes="auto" data-src="https://image.tmdb.org/t/p/w185_and_h278_bestv2/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg" data-srcset="https://image.tmdb.org/t/p/w185_and_h278_bestv2/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg 1x, https://image.tmdb.org/t/p/w370_and_h556_bestv2/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg 2x" alt="Spider-Man: Homecoming">




                    <div class="meta" data-role="tooltip">
          <span id="popularity_54a9ab849251414d5b005173_value" class="hide popularity_rank_value">
            <div class="tooltip_popup popularity">
              <h3>Popularity Rank</h3>
              <p>Today: 56</p>
              <p>Last Week: 51</p>
            </div>
          </span>
                        <span id="popularity_54a9ab849251414d5b005173" class="glyphicons glyphicons-cardio x1 popularity_rank"></span>
                        <span class="right">

              <span id="favourite_54a9ab849251414d5b005173" class="glyphicons glyphicons-heart x1 favourite list_action" data-media-type="movie"></span>
              <span id="watchlist_54a9ab849251414d5b005173" class="glyphicons glyphicons-bookmark x1 watchlist list_action" data-media-type="movie"></span>

          </span>
                    </div>
                </a>
            </div>
            <div class="info">
                <div class="wrapper">
                    <div class="consensus tight">
                        <div class="outer_ring">
                            <div class="user_score_chart 54a9ab849251414d5b005173" data-percent="73.0" data-track-color="#204529" data-bar-color="#21d07a">
                                <div class="percent">

                                    <span class="icon icon-r73"></span>

                                </div>
                                <canvas height="32" width="32"></canvas></div>
                        </div>
                    </div>

                    <div class="flex">
                        <a id="movie_315635" class="title result" href="/movie/315635" title="Spider-Man: Homecoming" alt="Spider-Man: Homecoming">Spider-Man: Homecoming</a>
                        <span>July  5, 2017</span>
                    </div>
                </div>
                <p class="overview">Following the events of Captain America: Civil War, Peter Parker, with the help of his mentor Tony Stark, tries to balance his life as an ordinary high school student in Queens, New York City, with fighting crime…</p>
                <p class="view_more"><a id="movie_315635" class="result" href="/movie/315635" title="Spider-Man: Homecoming" alt="Spider-Man: Homecoming">More Info</a></p>
            </div>
            <script>
                $(function() {
                    $('.user_score_chart.54a9ab849251414d5b005173').easyPieChart({
                        lineCap: 'round',
                        lineWidth: 3,
                        scaleColor: false,
                        size: 32,
                        animate: {
                            enabled: false
                        }
                    });
                });
            </script>
        </div>



        <div class="pagination">
            <p class="left">Currently on page: 1 of 644 <span class="total_results grey">(12,865 results)</span></p>

            <p class="right pagination"><a href="/discover/movie?page=2&amp;media_type=movie"><span class="glyphicons glyphicons-circle-arrow-right x1"></span></a></p>

        </div>


        <script>
            $(document).ready(function() {

                attachLoggedInAccountTooltips(["55d1c092c3a3681bf0009279", "51589cc619c2956e650dca36", "54c7e0bdc3a36874bf0046fb", "53d5f8190e0a26283e006d52", "55c6312ec3a3682490000226", "5093e69c760ee3796f000c7d", "559c8958c3a3681bec00074e", "574482aac3a368076b00096f", "533fea440e0a262b2900123b", "552f04eb92514138380039ab", "55c4dd3b92514142920001fd", "59f485039251414d33011e5f", "54ac549792514156790044d7", "5708ac22c3a3681d32002054", "59d39c1792514140af012a36", "5573c453c3a36838d300593c", "5114189319c29539d324016c", "56819c8a9251417def011cb1", "55f743a9c3a3686d0300b79b", "54a9ab849251414d5b005173"], 'haitranviet96', '5ab9022f9251414d34000103', 'Add to your favorite list', 'Add to your watchlist', 'Remove from your favorite list', 'Remove from your watchlist');
                enableLoggedInAccountTooltipActions('movie', 'haitranviet96', 'Add to your favorite list', 'Add to your watchlist', 'Remove from your favorite list', 'Remove from your watchlist');


                attachMovieListPopularityTooltip();
            });
        </script>

    </div>

    <script type="text/javascript" charset="utf-8">

        function submitForm(){
            $.ajax({
                url: '/discover/movie/remote?language=en&media_type=movie',
                type: 'GET',
                data: $('#discover').serialize(),
                dataType: 'html'
            }).fail(function() {
                showError('There was a problem.');
            }).done(function(response) {
                $('div.results').html(response);
            });
        };

        // $("#sort_by").change(function() {
        //   var selected_value = $(this).val();
        //   switch (selected_value) {
        //     case 'vote_average.asc':
        //     case 'vote_average.desc':
        //       $("#vote_count").val('10')
        //       break;
        //     default:
        //       $("#vote_count").val('0')
        //       break;
        //   }

        //   submitForm();
        // });

        $("#year").kendoDropDownList({
            change: function(e) {
                submitForm();
            }
        });

        $("#sort_by").kendoDropDownList({
            change: function(e) {
                submitForm();
            }
        });

        $("#with_genres").kendoMultiSelect({
            placeholder: "Filter by genres...",
            minLength: 1,
            change: function(e) {
                submitForm();
            }
        });


        $("#with_keywords").kendoMultiSelect({
            placeholder: "Filter by keywords...",
            dataTextField: "name",
            dataValueField: "id",
            autoBind: false,
            dataSource: {
                type: "json",
                serverFiltering: true,
                serverPaging: true,
                schema: {
                    data: "results",
                    total: "total_results"
                },
                pageSize: 50,
                transport: {
                    read: {
                        url: "/search/remote/keyword",
                    }
                }
            },
            minLength: 2,
            change: function(e) {
                // var dataItem = this.dataSource.view()[e.item.index()];
                // var selected_id = dataItem.id;
                // var selected_name = dataItem.name;
                submitForm();
            },
            value: []
        });



    </script>
        </div>
    </div>
</section>
@endsection