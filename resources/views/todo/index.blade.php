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
        <tr>
            <td>Item 1</td>
            <td class="text-right">
                <a href="#" class="btn btn-info btn-sm">Done</a>
                <a href="#" class="btn btn-success btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Item 1</td>
            <td class="text-right">
                <a href="#" class="btn btn-info btn-sm">Done</a>
                <a href="#" class="btn btn-success btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Item 1</td>
            <td class="text-right">
                <a href="#" class="btn btn-info btn-sm">Done</a>
                <a href="#" class="btn btn-success btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
