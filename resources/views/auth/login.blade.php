@extends('layouts.app')

@section('content')
<div class="container" align="left">

    <div class="row">
        <br><br><br>
        <div class="col-md-6 col-md-offset--3">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h2>Member Sign In</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

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
                                <input id="password" type="password" class="form-control" name="password" >

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
                                <button type="submit" class="btn btn-primary" >
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div class="col-lg-6">
        <div class="panel panel-default" align="left">
        <div class="panel-heading" align="center"><h2>Data Security</h2></div>
        <div class="panel-body" align="right">

    Data security refers to protective digital privacy measures that are applied to prevent unauthorized access to computers,
    databases and websites.
    Data security also protects data from corruption.
    Data security is the main priority for organizations of every size and genre.
            Data security refers to protective digital privacy measures that are applied to prevent unauthorized access to computers, databases and websites.
            Data security also protects data from corruption.
            Data security is the main priority for organizations of every size and genre.
            Data security is the main priority for organizations of every size and genre.
            Data security is the main priority for organizations of every size and genre.<br>
    <br>
        </div>

        </div>
</div>
</div>
</div>

@endsection
