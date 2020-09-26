<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class SearchController extends Controller
{
    public function index()
    {
        // 東京23区の連想配列
        $tokyo23 = [
            "adachiKu" => "足立区", "arakawaKu" => "荒川区", "itabashiKu" => "板橋区",
            "edogawaKu" => "江戸川区", "otaKu" => "大田区", "katsushikaKu" => "葛飾区",
            "kitaKu" => "北区", "koutouKu" => "江東区", "shinagawaKu" => "品川区",
            "shibuyaKu" => "渋谷区", "shinjukuKu" => "新宿区", "suginamiKu" => "杉並区",
            "sumidaKu" => "墨田区", "setagayaKu" => "世田谷区", "taitoKu" => "台東区",
            "chiyodaKu" => "千代田区", "chuoKu" => "中央区", "toshimaKu" => "豊島区",
            "nakanoKu" => "中野区", "nerimaKu" => "練馬区", "bunkyoKu" => "文京区",
            "minatoKu" => "港区", "meguroKu" => "目黒区"
        ];
        // カテゴリーリスト
        $category_list = ["競技系チーム", "レディースチーム", "社会人チーム", "エンジョイチーム", "学生チーム", "ガチチーム", "その他"];
        // DBからチーム情報をすべて取得する
        $teams = Team::all();
        return view('team.search', compact('teams', 'tokyo23', 'category_list'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $category = $request->category;

        var_dump($category);
        exit;

        // 検索クエリ
        $query = Team::query();

        if($request->has('keyword')) {
            $query->where('area','like','%'.$keyword.'%');
            $query->where('age_group','like','%'.$keyword.'%');
            $query->where('category','like','%'.$keyword.'%');
        }

        if($request->has('category')) {
            $query->where('category','=', $category);
        }

        $teams = $query->paginate(10);

        return view('team.search', compact('teams'));
    }
}
