<?php

namespace App\Http\Controllers;

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
        return view('todo.index');
    }

    public function create()
    {
        return view('todo.create');
    }
}
