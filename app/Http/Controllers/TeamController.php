<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function add()
    {   
        return view('team.create');
    }

    public function confirm(Request $request) 
    {
        
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
            'image' => 'string',
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
			'image' => $request->input('image'), // チーム画像
            'url_path' => $request->input('url_path'), // チームURL
        );

        // // フォームから画像が送信されてきたら、保存して、$teams->image_path に画像のパスを保存する
        // if (isset($form['image'])) {
        //     $path = $request->file('image_path')->store('public/images');
        //     $teams->image_path = basename($path);
        // } else {
        //     $teams->image = null;
        // }
    
        // フォームから送信されてきた_tokenを削除する
        // unset($teams['_token']);
    
        // // フォームから送信されてきたimageを削除する
        // unset($form['image']);
        
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

    public function edit(Request $request)
    {
        // Team Modelからデータを取得する
        $teams = Team::find($request->id);
        
        if (empty($team)) {
            abort(404);    
        }
        
        return view('team.edit', ['team_form' => $team]);
    }

    public function update(Request $request)
    {
        // Team Modelからデータを取得する
        $team = Team::find($request->id);
        
        // 送信されてきたフォームデータを格納する
        $team_form = $request->all();
        // if (isset($news_form['image'])) {
        //     $path = $request->file('image')->store('public/image');
        //     $news->image_path = basename($path);
        //     unset($news_form['image']);
        // } elseif (isset($request->remove)) {
        //     $news->image_path = null;
        //     unset($news_form['remove']);
        // }

        unset($team_form['_token']);

        // 該当するデータを上書きして保存する
        $team->fill($team_form)->save();
        
        return redirect('team/confirm');
    }
}
