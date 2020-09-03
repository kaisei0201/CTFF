<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        return view('users.create');
    }

    public function create()
    {
        return redirect('users/create');
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function update()
    {
        return redirect('users/edit');
    }
}
