@extends('todo.layout')

@section('asghar-agha')
    <table class="table table-striped  table-hover">
        <thead>
        <tr>
            <th class="col-sm-9">Name</th>
            <th>
                Action
                <a href="{{ url('/todo/create') }}" class="btn btn-primary btn-sm pull-right">Create</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $t)
            <tr>
                <td>{{ $t->name }}</td>
                <td class="text-right">
                    <a href="#" class="btn btn-info btn-sm">Done</a>
                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
