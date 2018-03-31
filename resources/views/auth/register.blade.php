@extends('layouts.default')

@section('title','Register')

@section('content')

<section class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="margin-top-1 text-primary">Sign Up</h2>
            <h4></h4>
            <hr class="primary">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            @if(isset($user_token))
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="user_token" type="hidden"
                                           name="user_token" value="{{$user_token}}">
                                </div>
                            </div>
                            @endif

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" placeholder="Your name"
                                           value="@if(isset($name)) {{$name}}  @else {{ old('name') }} @endif"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" placeholder="Email"
                                           value="@if(isset($email)) {{$email}} @else {{ old('email') }} @endif" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if(!isset($user_token))
            <div id="oa_social_login_container"></div>

            <script type="text/javascript">

                /* Replace #your_callback_uri# with the url to your own callback script */
                var your_callback_script = 'http://bhTV.com/callback';

                /* Embeds the buttons into the container oa_social_login_container */
                var _oneall = _oneall || [];
                _oneall.push(['social_login', 'set_providers', ['facebook', 'google', 'twitter']]);
                _oneall.push(['social_login', 'set_callback_uri', your_callback_script]);
                _oneall.push(['social_login', 'do_render_ui', 'oa_social_login_container']);

            </script>
            @endif
        </div>
    </div>
</section>
@endsection
