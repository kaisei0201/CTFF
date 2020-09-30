<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add()
    {   
        return view('team.create');
    }

    public function confirm(Request $request) {
        
        //バリデーション
        $validatedData = $request->validate([
            'name' => 'required|string',
            'name_kana' => 'required|string',
            'representative' => 'required|string',
            'member_count' => 'required|string',
            'area' => 'required|string',
            'age_group' => 'required|string',
            'category' => 'required|string',
            'mood_enjoy' => 'required|integer',
            'mood_sanity' => 'required|integer',
            'tag' => 'nullable|array',
            'create_year' => 'string',
            'create_month' => 'string',
            'introduction' => 'present',
            'image_path' => 'string',
            'team_url' => 'string',
        ]);

        // ビューで使う配列データの作成
		$teams = array(
			'name' => $request->input('name'), // チーム名
            'name_kana' => $request->input('name_kana'), // チーム名フリガナ
            'representative' => $request->input('representative'), // 代表者
            'member_count' => $request->input('member_count'), // メンバー人数
			'area' => $request->input('area'), // 活動エリア
			'age_group' => $request->input('age_group'), // 年齢層
			'category' => $request->input('category'), // カテゴリー
            'mood_enjoy' => $request->input('mood_enjoy'), // 雰囲気エンジョイ
			'mood_sanity' => $request->input('mood_sanity'), // 雰囲気ガチ
			'tag' => $request->input('tag',array('なし')), // タグ
			'create_year' => $request->input('create_year'), // 結成時期（月）
			'create_month' => $request->input('create_month'), // 結成時期（年）
			'introduction' => $request->input('introduction'), // チーム紹介
			'image_path' => $request->input('image_path'), // チーム画像
			'team_url' => $request->input('url_path'), // チームURL
        );
		return view('team.confirm', $teams);
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
