<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home() {
        return view('first-view');
    }

    public function login()
    {
        return view('login-logout.login');
    }

    /**
     * Show index of todos
     */
    public function index()
    {
        $ts = Todo::all();

        return view('todo.index', ['todos' => $ts]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $t = new Todo();
        $t->name = $request->name;
        $t->description = $request->description;
        $t->save();

        return redirect(route('todo.index'));
    }

    public function destroy($id)
    {
        Todo::query()->find($id)->delete();

        return redirect(url('/todo'));
    }

    public function done($id)
    {
        $todo = Todo::query()->find($id);
        $todo->is_done = 1;
        $todo->save();

        return redirect(url('/todo'));
    }

    public function undone($id)
    {
        $todo = Todo::query()->find($id);
        $todo->is_done = 0;
        $todo->save();

        return redirect(url('/todo'));
    }

    public function edit($id)
    {
        $t = Todo::query()->find($id);

        return view('todo.edit', ['todo' => $t]);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::query()->find($id);
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->save();

        return redirect(route('todo.index'));
    }
}
