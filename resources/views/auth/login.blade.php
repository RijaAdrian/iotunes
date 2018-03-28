@extends('layouts.app')

    <div class="lds-css ng-scope">
        <div style="width:100%;height:100%" class="lds-rolling"></div>
    </div>

    <style type="text/css">
        @keyframes lds-rolling {
              0% {
                  -webkit-transform: translate(-50%, -50%) rotate(0deg);
                  transform: translate(-50%, -50%) rotate(0deg);
              }
              100% {
                  -webkit-transform: translate(-50%, -50%) rotate(360deg);
                  transform: translate(-50%, -50%) rotate(360deg);
              } }
        @-webkit-keyframes lds-rolling {
            0% {
                -webkit-transform: translate(-50%, -50%) rotate(0deg);
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                -webkit-transform: translate(-50%, -50%) rotate(360deg);
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
        .lds-rolling {
            position: relative;
        }
        .lds-rolling div,
        .lds-rolling div:after {
            position: absolute;
            width: 160px;
            height: 160px;
            border: 20px solid #be5960;
            border-top-color: transparent;
            border-radius: 50%;
        }
        .lds-rolling div {
            -webkit-animation: lds-rolling 1s linear infinite;
            animation: lds-rolling 1s linear infinite;
            top: 100px;
            left: 100px;
        }
        .lds-rolling div:after {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .lds-rolling {
            width: 200px !important;
            height: 200px !important;
            -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
            transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
        }
    </style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
