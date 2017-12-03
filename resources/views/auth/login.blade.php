@extends('auth.layout')

@section('title', trans('dictionary.login'))

@section('content')
    {!! Form::open(['method' => 'post', 'route' => ['login']]) !!}
        <div class="card {{ !$errors->isEmpty() ?: 'card-hidden' }}">
            <div class="header text-center">{{ trans('auth.restricted-access') }}</div>

            <div class="content-no-padding padding-h-40">
                {!! Form::openGroup('email', trans('dictionary.email'), ['style'=>'width:280px;']) !!}
                {!! Form::email('email', null, ['style'=>'width:280px;']) !!}
                {!! Form::closeGroup() !!}

                {!! Form::openGroup('password', trans('dictionary.password'), ['style'=>'width:280px;']) !!}
                {!! Form::password('password', ['style'=>'width:280px;']) !!}
                {!! Form::closeGroup() !!}
            </div>

            <div class="footer text-center">
                <button class="btn btn-fill btn-primary btn-wd">{{ trans('dictionary.login') }}</button>
            </div>

            <div class="footer text-center">
                <a href="{{ route('password.request') }}">{{ trans('auth.forgot') }}</a> <br />

                @if (config('auth.register'))
                    <a href="{{ route('register') }}">{{ trans('dictionary.register') }}</a>
                @endif
            </div>
        </div>
    {!! Form::close() !!}
@endsection
