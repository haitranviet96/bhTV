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
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Films</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->



                <!-- TO DO List -->
                {{--<div class="box box-primary">--}}
                    {{--<div class="box-header">--}}
                        {{--<i class="ion ion-clipboard"></i>--}}

                        {{--<h3 class="box-title">To Do List</h3>--}}

                        {{--<div class="box-tools pull-right">--}}
                            {{--<ul class="pagination pagination-sm inline">--}}
                                {{--<li><a href="#">&laquo;</a></li>--}}
                                {{--<li><a href="#">1</a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">&raquo;</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /.box-header -->--}}
                    {{--<div class="box-body">--}}
                        {{--<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->--}}
                        {{--<ul class="todo-list">--}}
                            {{--<li>--}}
                                {{--<!-- drag handle -->--}}
                                {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<input type="checkbox" value="">--}}
                                {{--<!-- todo text -->--}}
                                {{--<span class="text">Design a nice theme</span>--}}
                                {{--<!-- Emphasis label -->--}}
                                {{--<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>--}}
                                {{--<!-- General tools such as edit or delete-->--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<input type="checkbox" value="">--}}
                                {{--<span class="text">Make the theme responsive</span>--}}
                                {{--<small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<input type="checkbox" value="">--}}
                                {{--<span class="text">Let theme shine like a star</span>--}}
                                {{--<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<input type="checkbox" value="">--}}
                                {{--<span class="text">Let theme shine like a star</span>--}}
                                {{--<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<input type="checkbox" value="">--}}
                                {{--<span class="text">Check your messages and notifications</span>--}}
                                {{--<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<input type="checkbox" value="">--}}
                                {{--<span class="text">Let theme shine like a star</span>--}}
                                {{--<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<!-- /.box-body -->--}}
                    {{--<div class="box-footer clearfix no-border">--}}
                        {{--<button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>--}}
                    {{--</div>--}}
                {{--</div>--}}


            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            {{--<section class="col-lg-5 connectedSortable">--}}

                {{--<!-- Map box -->--}}
                {{--<div class="box box-solid bg-light-blue-gradient">--}}
                    {{--<div class="box-header">--}}
                        {{--<!-- tools box -->--}}
                        {{--<div class="pull-right box-tools">--}}
                            {{--<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"--}}
                                    {{--title="Date range">--}}
                                {{--<i class="fa fa-calendar"></i></button>--}}
                            {{--<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"--}}
                                    {{--data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">--}}
                                {{--<i class="fa fa-minus"></i></button>--}}
                        {{--</div>--}}
                        {{--<!-- /. tools -->--}}

                        {{--<i class="fa fa-map-marker"></i>--}}

                        {{--<h3 class="box-title">--}}
                            {{--Visitors--}}
                        {{--</h3>--}}
                    {{--</div>--}}
                    {{--<div class="box-body">--}}
                        {{--<div id="world-map" style="height: 250px; width: 100%;"></div>--}}
                    {{--</div>--}}
                    {{--<!-- /.box-body-->--}}
                    {{--<div class="box-footer no-border">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">--}}
                                {{--<div id="sparkline-1"></div>--}}
                                {{--<div class="knob-label">Visitors</div>--}}
                            {{--</div>--}}
                            {{--<!-- ./col -->--}}
                            {{--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">--}}
                                {{--<div id="sparkline-2"></div>--}}
                                {{--<div class="knob-label">Online</div>--}}
                            {{--</div>--}}
                            {{--<!-- ./col -->--}}
                            {{--<div class="col-xs-4 text-center">--}}
                                {{--<div id="sparkline-3"></div>--}}
                                {{--<div class="knob-label">Exists</div>--}}
                            {{--</div>--}}
                            {{--<!-- ./col -->--}}
                        {{--</div>--}}
                        {{--<!-- /.row -->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /.box -->--}}




            {{--</section>--}}
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

@endsection