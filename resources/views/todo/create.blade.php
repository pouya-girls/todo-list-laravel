@extends('todo.layout')

@section('asghar-agha')
    <form class="form-horizontal">
        <div class="form-group">
            <label class=" col-sm-2 control-label">Name :</label>
            <div class="col-sm-10">
                <input name="name" placeholder="Name" class="form-control">
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