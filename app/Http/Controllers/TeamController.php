<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add()
    {
        return view('team.create');
    }

    public function confirm(Request $request)
    {
        // 確認画面
        return view('team.confirm', compact('request'));
    }

    public function complete(Request $request)
    {
        return view('team.complete');
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
