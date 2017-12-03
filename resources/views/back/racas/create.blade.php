@extends('back.layout')

@section('title', trans('dictionary.racas'))

@push('page-actions')
    <a href="{{ route('back.racas.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.racas.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.racas.store']]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('nome', trans('dictionary.nome')) !!}
                                {!! Form::text('nome') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('tamanhoMax', trans('dictionary.tamanhoMax')) !!}
                                {!! Form::Number('tamanhoMax', null, ['step'=>'any']) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('tamanhoMin', trans('dictionary.tamanhoMin')) !!}
                                {!! Form::Number('tamanhoMin', null, ['step'=>'any']) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('expect_vida', trans('dictionary.expect_vida')) !!}
                                {!! Form::Number('expect_vida', null, ['step'=>'any']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <hr />

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.create')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
