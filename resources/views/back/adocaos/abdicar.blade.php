@extends('back.layout')

@section('title', trans('dictionary.abdicar'))

@push('page-actions')
    <a href="{{ route('back.adocaos.index') }}" class="btn btn-default">@lang('messages.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('dictionary.adotante')</th>
                                <th>@lang('dictionary.animal')</th>
                                <th>@lang('dictionary.user')</th>
                                <th>@lang('dictionary.dt_devolucao')</th>
                                <th width="10%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($adocaos as $adocao)
                            @if($adocao->adocao === 1)
                                <tr>
                                    <td>{{ $adocao->id }}</td>
                                    @foreach($adotantes as $adotante)
                                    @if($adocao->id_adotante === $adotante->id)
                                      <td>{{ $adotante->nome }}</td>
                                    @endif
                                    @endforeach
                                    @foreach($animals as $animal)
                                    @if($adocao->id_animal === $animal->id)
                                      <td>{{ $animal->nome }}</td>
                                    @endif
                                    @endforeach
                                    @foreach($users as $user)
                                    @if($adocao->id_user === $user->id)
                                      <td>{{ $user->name }}</td>
                                    @endif
                                    @endforeach
                                    <td>{{ $adocao->dt_devolucao }}</td>
                                    <td class="td-actions">
                                        <!-- {!! Form::open(['method' => 'get', 'route' => ['back.adocaos.edit', $adocao->id]]) !!}
                                        <button class="btn btn-default btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        {!! Form::close() !!} -->

                                        {!! Form::open(['method' => 'delete', 'route' => ['back.adocaos.destroy', $adocao->id], 'data-confirm' => trans('messages.confirm'), 'data-title' => trans('messages.confirm-title'), 'data-type' => 'warning']) !!}
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">@lang('messages.no-records')</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $adocaos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
