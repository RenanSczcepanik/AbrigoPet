@extends('back.layout')

@section('title', trans('dictionary.adotantes'))

@push('page-actions')
    <a href="{{ route('back.adotantes.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.adotantes.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.adotantes.store']]) !!}
                        <div class="row">
                            <div class="col-md-12">
                              <label for="">INFORMAÇÔES PESSOAIS E CONTATO</label>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('nome', trans('dictionary.nome')) !!}
                                {!! Form::text('nome') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('fone_fixo', trans('dictionary.fone_fixo')) !!}
                                {!! Form::text('fone_fixo') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('fone_celular', trans('dictionary.fone_celular')) !!}
                                {!! Form::text('fone_celular') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                                {!! Form::text('email') !!}
                                {!! Form::closeGroup() !!}
                              </div>
                              <label for="">INFORMAÇÔES DE ENDEREÇO</label>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('rua', trans('dictionary.rua')) !!}
                                {!! Form::text('rua') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('numero', trans('dictionary.numero')) !!}
                                {!! Form::text('numero') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('cep', trans('dictionary.cep')) !!}
                                {!! Form::text('cep') !!}
                                {!! Form::closeGroup() !!}
                              </div>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('bairro', trans('dictionary.bairro')) !!}
                                {!! Form::text('bairro') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('cidade', trans('dictionary.cidade')) !!}
                                {!! Form::text('cidade') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('estado', trans('dictionary.estado')) !!}
                                {!! Form::text('estado') !!}
                                {!! Form::closeGroup() !!}
                              </div>
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
