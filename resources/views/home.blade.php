@extends('layouts.default')

@section('title','Home Page')

@section('content')

<section class="bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="margin-top-1 text-primary">BHTV</h2>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
