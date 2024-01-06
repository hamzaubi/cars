<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Ads Per Day',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Vehicle',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'Y-m-d H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'vehicle',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'        => 'Ads Today',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Vehicle',
            'group_by_field'     => 'make',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_period'      => 'week',
            'column_class'       => 'col-md-3',
            'entries_number'     => '5',
            'translation_key'    => 'vehicle',
        ];

        $chart2 = new LaravelChart($settings2);

        return view('home', compact('chart1', 'chart2'));
    }
}
