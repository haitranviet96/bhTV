@extends('admin.partials.default')

@section('title','Admin | Dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Films</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>200</h3>

                        <p>Celebrities</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        {{--<div class="row">--}}
            {{--<section class="col-lg-7 connectedSortable">--}}
                {{--<!-- Custom tabs (Charts with tabs)-->--}}
                {{--<div class="nav-tabs-custom">--}}
                    {{--<!-- Tabs within a box -->--}}
                    {{--<ul class="nav nav-tabs pull-right">--}}
                        {{--<li class="pull-left header"><i class="fa fa-inbox"></i> Films</li>--}}
                    {{--</ul>--}}
                    {{--<div class="tab-content no-padding">--}}
                        {{--<!-- Morris chart - Sales -->--}}
                        {{--<div class="chart" id="films-chart" style="position: relative; height: 300px;"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /.nav-tabs-custom -->--}}

            {{--</section>--}}
        {{--</div>--}}
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
@endsection
{{--@section('scripts')--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>--}}

    {{--<script type="text/javascript">--}}
        {{--window.onload = function () {--}}
            {{--var data =  "{{$chartData}}" ;--}}
            {{--var dataChart = data.replace(/&quot;/g, '"');--}}
            {{--console.log(dataChart);--}}
            {{--Morris.Bar({--}}
                {{--element: 'chart',--}}
                {{--data: dataChart,--}}
                {{--xkey: 'year',--}}
                {{--ykeys: ['count'],--}}
                {{--labels: ['Films Released'],--}}
                {{--resize: true--}}
            {{--});--}}
        {{--};--}}
    {{--</script>--}}
{{--@endsection--}}