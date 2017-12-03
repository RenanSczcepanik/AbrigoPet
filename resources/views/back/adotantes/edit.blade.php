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
                    <h4 class="title">@lang('dictionary.update'): {{ $adotante->nome }}</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'put', 'route' => ['back.adotantes.update', $adotante->id], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">
                              <label for="">INFORMAÇÔES PESSOAIS E CONTATO</label>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('nome', trans('dictionary.nome')) !!}
                                {!! Form::text('nome', $adotante->nome) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('fone_fixo', trans('dictionary.fone_fixo')) !!}
                                {!! Form::text('fone_fixo', $adotante->fone_fixo) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('fone_celular', trans('dictionary.fone_celular')) !!}
                                {!! Form::text('fone_celular', $adotante->fone_celular) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                                {!! Form::text('email', $adotante->email) !!}
                                {!! Form::closeGroup() !!}
                              </div>
                                <label for="">INFORMAÇÔES DE ENDEREÇO</label>
                                <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('rua', trans('dictionary.rua')) !!}
                                {!! Form::text('rua', $adotante->rua) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('numero', trans('dictionary.numero')) !!}
                                {!! Form::text('numero', $adotante->numero) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('cep', trans('dictionary.cep')) !!}
                                {!! Form::text('cep', $adotante->cep) !!}
                                {!! Form::closeGroup() !!}
                              </div>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('bairro', trans('dictionary.bairro')) !!}
                                {!! Form::text('bairro', $adotante->bairro) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('cidade', trans('dictionary.cidade')) !!}
                                {!! Form::text('cidade', $adotante->cidade) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('estado', trans('dictionary.estado')) !!}
                                {!! Form::text('estado', $adotante->estado) !!}
                                {!! Form::closeGroup() !!}
                              </div>
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
