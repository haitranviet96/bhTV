@extends('admin.partials.default')
@section('title','Admin | Dashboard')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                ADMIN bhTV
                <small>form</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Films</a></li>
                <li class="active">Add films</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Film Form</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName3" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputReleased3" class="col-sm-2 control-label">Released Date</label>

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="inputReleased3" placeholder="Released Date" name="released_date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription3" class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." id="inputDescription3" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputImage3" class="col-sm-2 control-label">Image Path</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputImage3" placeholder="Image Path" name="img_url">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTrailer3" class="col-sm-2 control-label">Trailer Path</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputTrailer3" placeholder="Trailer Path" name="trailer_url">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputLength3" class="col-sm-2 control-label">Length</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputLength3" placeholder="Length" name="length">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputRate3" class="col-sm-2 control-label">Average Rate</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputRate3" placeholder="Average Rate" name="avg_rate">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputMat3" class="col-sm-2 control-label">Mature Rate</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputMat3" placeholder="Mature Rate" name="mat_rate">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDirector3" class="col-sm-2 control-label">Directors</label>

                                    <div class="col-sm-10" id="director3">
                                        <input type="text" class="form-control" id="inputDirector3" placeholder="Directors" name="director">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCast3" class="col-sm-2 control-label">Casts</label>

                                    <div class="col-sm-10" id="cast3">
                                        <input type="text" class="form-control" id="inputCast3" placeholder="Cast" name="cast">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="button" class="btn btn-info pull-right" id="addSubmitChange">Save Changes</button>
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