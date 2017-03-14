@extends('templates.default')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-6">

                <form class="form-horizontal" method="post">
                    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                        <label class="control-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username">
                        @if($errors->has('username'))
                            <span class="help-block">{{ $errors->first('username') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        <label class="control-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                        @if($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input class="btn btn-default" type="submit" value="SignIn">
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>

            </div>
        </div>
    </div>
@endsection