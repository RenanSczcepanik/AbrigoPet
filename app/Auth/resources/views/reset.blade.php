@extends('auth::layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Reset Password</h4>

                    {!! Form::open(['method' => 'post', 'route' => ['password.reset.post']]) !!}

                    {!! Form::openGroup('email', 'E-Mail Address') !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('password', 'Password') !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('password_confirmation', 'Confirm Password') !!}
                    {!! Form::password('password_confirmation') !!}
                    {!! Form::closeGroup() !!}

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-refresh"></i> Reset Password
                        </button>

                        <a class="btn btn-link" href="{{ route('login') }}">Login</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
