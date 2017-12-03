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
                    <h4 class="title">@lang('dictionary.update'): {{ $raca->nome }}</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'put', 'route' => ['back.racas.update', $raca->id], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('nome', trans('dictionary.nome')) !!}
                                {!! Form::text('nome', $raca->nome) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('tamanhoMax', trans('dictionary.tamanhoMax')) !!}
                                {!! Form::text('tamanhoMax', $raca->tamanhoMax) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('tamanhoMin', trans('dictionary.tamanhoMin')) !!}
                                {!! Form::text('tamanhoMin', $raca->tamanhoMin) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('expect_vida', trans('dictionary.expect_vida')) !!}
                                {!! Form::text('expect_vida', $raca->expect_vida) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <hr />

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.update')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
