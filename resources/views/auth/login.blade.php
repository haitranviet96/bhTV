@extends('layouts.default')

@section('title','Login')

@section('content')

<section class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="margin-top-1 text-primary">Login</h2>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" placeholder="Email" value="{{ old('email') }}"
                                           required autofocus>

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
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"
                                                   {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        </div>
</section>
@endsection
