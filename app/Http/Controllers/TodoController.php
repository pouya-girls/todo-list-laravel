<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Show index of todos
     */
    public function index()
    {
        $ts = auth()->user()->todos()->get();

        return view('todo.index', ['todos' => $ts]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
//        $t = new Todo();
//        $t->name = $request->name;
//        $t->description = $request->description;
//        $t->user_id = auth()->user()->id;
//        $t->save();
//        Todo::query()->create($request->all()); // mass assignment.
        $todo = new Todo($request->all());
        auth()->user()->todos()->save($todo);

        return redirect(route('todo.index'));
    }

    public function destroy($id)
    {
        $todo = Todo::query()->find($id);

        $this->authorize('delete', $todo);

        $todo->delete();

        return redirect(url('/todo'));
    }

    public function done($id)
    {
        $todo = Todo::query()->find($id);

        $this->authorize('done', $todo);

        $todo->is_done = 1;
        $todo->save();

        return redirect(url('/todo'));
    }

    public function undone($id)
    {
        $todo = Todo::query()->find($id);

        $this->authorize('undone', $todo);

        $todo->is_done = 0;
        $todo->save();

        return redirect(url('/todo'));
    }

    public function edit($id)
    {
        $t = Todo::query()->find($id);

        $this->authorize('update', $t);

        return view('todo.edit', ['todo' => $t]);
    }

    public function update(Request $request, $id)
    {
//        $todo = Todo::query()->find($id);
//        $todo->name = $request->name;
//        $todo->description = $request->description;
//        $todo->save();

        $todo = Todo::query()->find($id);
        $this->authorize('update', $todo);
        $todo->update($request->all());


        return redirect(route('todo.index'));
    }
}
