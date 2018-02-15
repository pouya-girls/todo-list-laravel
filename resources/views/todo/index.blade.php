@extends('todo.layout')

@section('asghar-agha')
    <table class="table table-striped  table-hover">
        <thead>
        <tr>
            <th class="col-sm-8">Name</th>
            <th>
                Action
                <a href="{{ route('todo.create') }}" class="btn btn-primary btn-sm pull-right">Create</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $t)
            <tr>
                <td>
                    <b>{{ $t->name }}</b>
                    <br>
                    {{ $t->description }}
                </td>
                <td class="text-right">
                    @if ($t->is_done)
                        <form method="post" action="{{ route('todo.undone', ['id' => $t->id]) }}" style="display: inline-block">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <button class="btn btn-info btn-sm">Undone</button>
                        </form>
                    @else
                        <form method="post" action="{{ route('todo.done', ['id' => $t->id]) }}" style="display: inline-block">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <button class="btn btn-info btn-sm">Done</button>
                        </form>
                    @endif
                    <a href="{{ route('todo.edit', ['id' => $t->id]) }}" class="btn btn-success btn-sm">Edit</a>
                    <form method="post" action="{{ route('todo.destroy', ['id' => $t->id]) }}" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
