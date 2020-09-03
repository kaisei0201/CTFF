<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add()
    {
        return view('team.create');
    }

    public function create()
    {
        return redirect('team/create');
    }

    public function edit()
    {
        return view('team.edit');
    }

    public function update()
    {
        return redirect('team/edit');
    }
}