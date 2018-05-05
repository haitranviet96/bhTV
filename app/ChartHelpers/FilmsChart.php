<?php

namespace App\ChartHelpers;
use App\Film;
use Illuminate\Support\Facades\DB;

class FilmsChart
{
    public function chartDataFromAllRecords()
    {

        $yearCounts = Film::select(DB::raw('year(released_date) as year'),
            DB::raw('count(id) as `count`'))
            ->groupBy('year')
            ->having('year', '>', '2011')->get();

        $chartData = $this->formatResultOf($yearCounts);
        return $chartData;

    }

    public function chartDataFrom($searchTerm)
    {

        $yearCounts = Film::select(DB::raw('year(released_date) as year'),
            DB::raw('count(id) as `count`'))
            ->where('name', 'LIKE', '%'. $searchTerm .'%')
            ->groupBy('year')
            ->get();

        $chartData = $this->formatResultOf($yearCounts);

        return $chartData;

    }

    protected function convertToString($results)
    {
        foreach ($results as $key => $val)
        {

            foreach ($val as $k => $v)
            {


                if (is_numeric($v))
                {

                    $results[$key][$k] = (string) $v;

                }

            }
        }

        return $results;
    }

    /**
     * @param $yearCounts
     * @return mixed
     */
    private function formatResultOf($yearCounts)
    {
        $results = $yearCounts->toArray();

        $chartData = $this->convertToString($results);

        return $chartData;
    }


}