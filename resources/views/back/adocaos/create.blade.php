@extends('back.layout')

@section('title', trans('dictionary.adocaos'))

@push('page-actions')
    <a href="{{ route('back.adocaos.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.adocaos.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.adocaos.store']]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('dt_adocao', trans('dictionary.dt_adocao')) !!}
                                {!! Form::date('dt_adocao', \Carbon\Carbon::today()) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('id_adotante', trans('dictionary.id_adotante')) !!}
                                {!! Form::select('id_adotante', \App\Models\Adotante::orderBy('nome')->where('impedimento', 0)->pluck('nome', 'id')->toArray()) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('id_animal', trans('dictionary.id_animal')) !!}
                                {!! Form::select('id_animal', \App\Models\Animal::orderBy('nome')->where('adotado', 0)->pluck('nome', 'id')->toArray()) !!}
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
