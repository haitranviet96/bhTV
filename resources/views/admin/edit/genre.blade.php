@extends('admin.partials.default')
@section('title','Admin | Dashboard')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                ADMIN BHTV
                <small>form</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Genres</a></li>
                <li class="active">Edit genres</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Form</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputSearch3" class="col-sm-2 control-label">Type in to search</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSearch3" placeholder="Search for genres">
                                        <div id="response"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName3" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputImage3" class="col-sm-2 control-label">Image Path</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputImage3" placeholder="Image Path">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="button" class="btn btn-info pull-right" id="submitChange">Save Changes</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

