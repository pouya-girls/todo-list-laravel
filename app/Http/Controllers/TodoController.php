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
}
