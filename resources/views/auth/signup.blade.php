@extends('templates.default')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-6">
                <form class="form-horizontal" method="post">

                    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                        <label class="control-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username" value="{{ Request::old('username') }}">
                        @if($errors->has('username'))
                            <span class="help-block">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="{{ Request::old('email') }}">
                        @if($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        <label class="control-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                        @if($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                        <label class="control-label" for="password_confirmation">Confirm password</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                        @if($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input class="btn btn-default" type="submit" value="SignUp">
                    </div>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
    </div>
@endsection