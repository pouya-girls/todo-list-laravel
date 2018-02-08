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

        //return $todos;
        return view('todo.index', ['todos' => $ts]);
    }

    public function create()
    {
        return view('todo.create');
    }
}
