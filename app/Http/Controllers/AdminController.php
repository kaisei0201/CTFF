<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.create');
    }

    public function create()
    {
        return redirect('admin/create');
    }

    public function edit()
    {
        return view('admin.edit');
    }

    public function update()
    {
        return redirect('admin/edit');
    }
}
