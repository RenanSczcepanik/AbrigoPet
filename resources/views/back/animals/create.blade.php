@extends('back.layout')

@section('title', trans('dictionary.animals'))

@push('page-actions')
    <a href="{{ route('back.animals.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.animals.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.animals.store']]) !!}
                        <div class="row">
                            <div class="col-md-12">
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('nome', trans('dictionary.nome')) !!}
                                {!! Form::text('nome') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('rga', trans('dictionary.rga')) !!}
                                {!! Form::text('rga') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('dt_nascimento', trans('dictionary.dt_nascimento')) !!}
                                {!! Form::date('dt_nascimento', \Carbon\Carbon::today()) !!}
                                {!! Form::closeGroup() !!}
                              </div>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('aprox_idade', trans('dictionary.aprox_idade')) !!}
                                {!! Form::number('aprox_idade', null, ['step'=>'any']) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('tipo_deficiencia', trans('dictionary.tipo_deficiencia')) !!}
                                {!! Form::text('tipo_deficiencia') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('dt_resgate', trans('dictionary.dt_resgate')) !!}
                                {!! Form::date('dt_resgate', \Carbon\Carbon::today()) !!}
                                {!! Form::closeGroup() !!}
                              </div>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('genero', trans('dictionary.genero')) !!}
                                <div class="radio">
                                  <label>
                                    <span class="icons">
                                      <span class="first-icon fa fa-circle-o">
                                      </span><span class="second-icon fa fa-dot-circle-o"></>
                                      </span>
                                      Macho
                                      <input name="genero" type="radio" value="M">
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <span class="icons">
                                      <span class="first-icon fa fa-circle-o">
                                      </span><span class="second-icon fa fa-dot-circle-o"></>
                                      </span>
                                      Fêmea
                                      <input name="genero" type="radio" value="F">
                                  </label>
                                </div>
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('vacinado', trans('dictionary.vacinado')) !!}
                                <div class="radio">
                                  <label>
                                    <span class="icons">
                                      <span class="first-icon fa fa-circle-o">
                                      </span><span class="second-icon fa fa-dot-circle-o"></>
                                      </span>
                                      Sim
                                      <input name="vacinado" type="radio" value="1">
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <span class="icons">
                                      <span class="first-icon fa fa-circle-o">
                                      </span><span class="second-icon fa fa-dot-circle-o"></>
                                      </span>
                                      Não
                                      <input name="vacinado" type="radio" value="0">
                                  </label>
                                </div>
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('castrado', trans('dictionary.castrado')) !!}
                                <div class="radio">
                                  <label>
                                    <span class="icons">
                                      <span class="first-icon fa fa-circle-o">
                                      </span><span class="second-icon fa fa-dot-circle-o"></>
                                      </span>
                                      Sim
                                      <input name="castrado" type="radio" value="1">
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <span class="icons">
                                      <span class="first-icon fa fa-circle-o">
                                      </span><span class="second-icon fa fa-dot-circle-o"></>
                                      </span>
                                      Não
                                      <input name="castrado" type="radio" value="0">
                                  </label>
                                </div>
                                {!! Form::closeGroup() !!}
                              </div>
                              <div style="display:flex;justify-content:space-between">
                                {!! Form::openGroup('tamanho', trans('dictionary.tamanho')) !!}
                                {!! Form::number('tamanho', null, ['step'=>'any']) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('peso', trans('dictionary.peso')) !!}
                                {!! Form::number('peso', null, ['step'=>'any']) !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('temperamento', trans('dictionary.temperamento')) !!}
                                {!! Form::text('temperamento') !!}
                                {!! Form::closeGroup() !!}

                                {!! Form::openGroup('id_raca', trans('dictionary.id_raca')) !!}
                                {!! Form::select('id_raca', \App\Models\Raca::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) !!}
                                {!! Form::closeGroup() !!}
                              </div>
                              <div style="display:flex;justify-content:space-between">
                                <div style="display:flex;justify-content:space-between">
                                    {!! Form::openGroup('obs', trans('dictionary.obs')) !!}
                                    {!! Form::textarea('obs', null, ['style' => 'width:920px']) !!}
                                    {!! Form::closeGroup() !!}
                                </div>
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
