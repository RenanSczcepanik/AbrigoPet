@extends('back.layout')

@section('title', trans('back.profile'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.profile'], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::openGroup('name', trans('dictionary.name'), ['style' => 'width:280px;']) !!}
                                {!! Form::text('name', auth()->user()->name, ['style' => 'width:280px;']) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-md-6">
                                {!! Form::openGroup('email', trans('dictionary.email'), ['style' => 'width:280px;']) !!}
                                {!! Form::email('email', auth()->user()->email, ['style' => 'width:280px;']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('picture', trans('dictionary.picture'), ['style' => 'width:280px;']) !!}
                                {!! Form::file('picture', ['style' => 'width:280px;']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <h4 class="title" style="margin: 18px 0 0 0">@lang('auth.change-password')</h4>
                        <hr style="margin: 0 0 18px 0" />

                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::openGroup('password', trans('dictionary.password'), ['style' => 'width:280px;']) !!}
                                {!! Form::password('password', ['style' => 'width:280px;']) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-md-6">
                                {!! Form::openGroup('password_confirmation', trans('auth.password-confirmation'), ['style' => 'width:280px;']) !!}
                                {!! Form::password('password_confirmation', ['style' => 'width:280px;']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.update')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                  <!-- src="/img/full-screen-image-{{ $background }}.jpg" -->
                    <img  />
                </div>
                <div class="content">
                    <div class="author">
                        <a href="{{ route('back.profile') }}">
                            <img class="avatar border-gray" src="/storage/profile/{{ auth()->user()->picture }}" alt="{{ Auth::user()->name }}"/>

                            <h4 class="title">{{ auth()->user()->name }}<br/>
                                <small>{{ auth()->user()->email }}</small>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
