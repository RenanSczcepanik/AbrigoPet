@extends('back.layout')

@section('title', trans('dictionary.adotantes'))

@push('page-actions')
    <a href="{{ route('back.adotantes.create') }}" class="btn btn-fill btn-primary">@lang('messages.add-new')</a>
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
                                <th>@lang('dictionary.name')</th>
                                <th>@lang('dictionary.email')</th>
                                <th width="10%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($adotantes as $adotante)
                                <tr>
                                    <td>{{ $adotante->id }}</td>
                                    <td>{{ $adotante->nome }}</td>
                                    <td>{{ $adotante->email }}</td>
                                    <td class="td-actions">
                                        {!! Form::open(['method' => 'get', 'route' => ['back.adotantes.edit', $adotante->id]]) !!}
                                        <button class="btn btn-default btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method' => 'delete', 'route' => ['back.adotantes.destroy', $adotante->id], 'data-confirm' => trans('messages.confirm'), 'data-title' => trans('messages.confirm-title'), 'data-type' => 'warning']) !!}
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">@lang('messages.no-records')</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $adotantes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
