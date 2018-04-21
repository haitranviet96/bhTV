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
                <li><a href="#">Celebrities</a></li>
                <li class="active">Edit Profile</li>
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
                            <div class="box-body" id="edit-celeb">
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName3" placeholder="Name" value="{{$celeb['name']}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDOB3" class="col-sm-2 control-label">Date of birth</label>

                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="inputDOB3" placeholder="Date of birth" value="{{$celeb['dob']}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPOB3" class="col-sm-2 control-label">Place of birth</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPOB3" placeholder="Place of birth" value="{{$celeb['pob']}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputGender3" class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-10">

                                    <select class="form-control" id="inputGender3">
                                        @if($celeb['gender'] == 2)
                                        <option value="2" selected>Male</option>
                                        <option value="1">Female</option>
                                            @else
                                            <option value="2">Male</option>
                                            <option value="1" selected>Female</option>
                                            @endif
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputImage3" class="col-sm-2 control-label">Image Path</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputImage3" placeholder="Image Path" value="{{$celeb['img_path']}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputBio3" class="col-sm-2 control-label">Bio</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." id="inputBio3">{{$celeb['bio']}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="button" class="btn btn-info pull-right" id="editCelebSubmitChange" value="{{$celeb['id']}}">Save Changes</button>
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
