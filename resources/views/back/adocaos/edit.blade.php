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
                    <h4 class="title">@lang('dictionary.update'): {{ $adocao->nome }}</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'put', 'route' => ['back.adocaos.update', $adocao->id], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">
                              {!! Form::openGroup('dt_adocao', trans('dictionary.dt_adocao')) !!}
                              {!! Form::date('dt_adocao', new \Carbon\Carbon($adocao->dt_adocao)) !!}
                              {!! Form::closeGroup() !!}

                              {!! Form::openGroup('id_adotante', trans('dictionary.id_adotante')) !!}
                              {!! Form::select('id_adotante', \App\Models\Adotante::orderBy('nome')->pluck('nome', 'id')->toArray(), $adocao->id_adotante) !!}
                              {!! Form::closeGroup() !!}

                              {!! Form::openGroup('id_animal', trans('dictionary.id_animal')) !!}
                              {!! Form::select('id_animal', \App\Models\Animal::orderBy('nome')->where('adotado', 0)->pluck('nome', 'id')->toArray(), $adocao->id_animal) !!}
                              {!! Form::closeGroup() !!}
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                              {!! Form::openGroup('adocao1', trans('dictionary.adocao1')) !!}
                              @if($adocao->adocao === 1)
                              <div class="radio checked">
                                <label>
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span><span class="second-icon fa fa-dot-circle-o"></>
                                    </span>
                                    Sim
                                    <input name="adocao" type="radio" value="1">
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span><span class="second-icon fa fa-dot-circle-o"></>
                                    </span>
                                    Não
                                    <input name="adocao" type="radio" value="0">
                                </label>
                              </div>
                              @else
                              <div class="radio">
                                <label>
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span><span class="second-icon fa fa-dot-circle-o"></>
                                    </span>
                                    Sim
                                    <input name="adocao" type="radio" value="1">
                                </label>
                              </div>
                              <div class="radio checked">
                                <label>
                                  <span class="icons">
                                    <span class="first-icon fa fa-circle-o">
                                    </span><span class="second-icon fa fa-dot-circle-o"></>
                                    </span>
                                    Não
                                    <input name="adocao" type="radio" value="0">
                                </label>
                              </div>
                              @endif
                              {!! Form::closeGroup() !!}

                              {!! Form::openGroup('dt_devolucao', trans('dictionary.dt_devolucao')) !!}
                              <input class="form-control" name="dt_devolucao" type="date" id="dt_devolucao" value="{{$adocao->dt_devolucao}}">
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
