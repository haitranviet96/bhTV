@extends('admin.partials.default')

@section('title','All Celebs')

@section('content')
    <section class="bg-primary" id="popular">
        <div class="container">
            <h2 class="margin-top-1 margin-bottom-1 text-primary">All Celebs<a href="{{route('addceleb')}}" title="Click to add Celeb" class="btn btn-default" style="margin-left: 900px"><i class="fa fa-plus-circle"></i></a></h2>


            @foreach($celebs as $celeb)
                <div class="col-sm-6 table-bordered movie-item boxed" style="display: block;width: 100%">
                    <div class="col-sm-4">
                        <img src="{{$celeb['img_path']}}"
                             alt="{{$celeb['name']}}" width="140" height="209">
                    </div>
                    <div class="col-sm-8">
                        <h4><a title="{{$celeb['name']}}">{{$celeb['name']}}</a></h4>
                        <div class="dob">{{$celeb['dob']}}</div>
                        <div class="pob"><span>{{$celeb['pob']}}</span></div>
                        <div class="gender">
                            <p>Gender</p>
                            <span>
                                @if($celeb['gender'] == 2) Male
                                @else Female @endif
                            </span>
                        </div>
                        <p>@if(strlen($celeb['bio'])>200) {{substr($celeb['bio'],0,200)}}...
                            @else {{$celeb['bio']}}@endif</p>
                        <a href="{{route('editCeleb',['id'=>$celeb['id']])}}" title="Click to edit" class="btn btn-default btn-success">Edit</a>
                        <button  title="Click to remove" id="button_remove_celeb" class="btn btn-default btn-danger" value="{{$celeb['id']}}">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $celebs->links() }}
    </section>
@endsection
