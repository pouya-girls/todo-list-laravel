@extends('todo.layout')

@section('asghar-agha')
    <form class="form-horizontal" method="post" action="{{ route('todo.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class=" col-sm-2 control-label">Name :</label>
            <div class="col-sm-10">
                <input name="name" placeholder="Name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-2 control-label">Description :</label>
            <div class="col-sm-10">
                <textarea name="description" rows="6" placeholder="Description" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-push-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ url('/todo') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection