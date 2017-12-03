@extends('back.layout')

@section('title', trans('dictionary.animals'))

@push('page-actions')
    <a href="{{ route('back.animals.create') }}" class="btn btn-fill btn-primary">@lang('messages.add-new')</a>
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
                                <th>@lang('dictionary.genero')</th>
                                <th>@lang('dictionary.rga')</th>
                                <th width="10%">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($animals as $animal)
                                <tr>
                                    <td>{{ $animal->id }}</td>
                                    <td>{{ $animal->nome }}</td>
                                    @if($animal->genero === 'M')
                                    <td>Macho</td>
                                    @else
                                    <td>Fêmea</td>
                                    @endif
                                    <td>{{ $animal->rga }}</td>
                                    <td class="td-actions">
                                        {!! Form::open(['method' => 'get', 'route' => ['back.animals.edit', $animal->id]]) !!}
                                        <button class="btn btn-default btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        {!! Form::close() !!}

                                        {!! Form::open(['method' => 'delete', 'route' => ['back.animals.destroy', $animal->id], 'data-confirm' => trans('messages.confirm'), 'data-title' => trans('messages.confirm-title'), 'data-type' => 'warning']) !!}
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

                    {{ $animals->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
