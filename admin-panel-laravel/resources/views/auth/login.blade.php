@extends('layouts.app')

@section('content')
<body  class="login">
<div class="container">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
               
                <div class="animate form login_form">
                    <section class="login_content">
                    <form method="POST" action="{{ route('login') }}">
                        <h1>Login Form</h1>
                        @csrf

                        
                            <div >
                                <input id="email" type="email" placeholder="Username" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div >
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div >
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log in') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="reset_pas" href="{{ route('password.request') }}">
                                        {{ __('Lost your password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />

                                <div>
                                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                    </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form method="POST" action="{{ route('register') }}">
                             @csrf

                            <h1>Create Account</h1>
                            <div>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus/>
                                  @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required />

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                              <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>



            
    </div>
</div>
</body>
@endsection
