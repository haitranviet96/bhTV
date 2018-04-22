@extends('admin.partials.default')

@section('title','All Users')

@section('content')
    <section class="content">

        <div class="container">
            <div class="col-xs-12">
                <div class="box">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">All Users</h3>
                                </div>
                                <!-- /.box-header -->
                                <form class="form-horizontal">
                                    <div class="box-body">
                                        <table class="table table-hover">
                                            <tbody><tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    @if($user->role == 'admin')
                                                        <td id="role"><span class="label label-success">{{$user->role}}</span></td>
                                                    @else
                                                        <td id="role"><span class="label label-warning">{{$user->role}}</span></td>
                                                    @endif
                                                    <td>{{$user->created_at}}</td>
                                                    <td>
                                                        <button  title="Click to remove" id="button_remove_user" class="btn btn-default btn-danger" value="{{$user->id}}"><i class="fa fa-remove"></i>Remove</button>
                                                        <button  title="Click to change role" id="button_role_user" class="btn btn-default btn-success" value="{{$user->id}}"><i class="fa fa-edit"></i>Change role</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody></table>
                                    </div>
                                    <!-- /.box-body -->
                                </form>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            {{$users->links()}}

        </div>
    </section>
@endsection
