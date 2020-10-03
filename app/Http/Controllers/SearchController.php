<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class SearchController extends Controller
{
    // 東京23区の連想配列
    private $tokyo23 = [
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
    private $categorys = ["競技系チーム", "レディースチーム", "社会人チーム", "エンジョイチーム", "学生チーム", "ガチチーム", "その他"];
    // 年代
    private $age_group = ['10代', '20代', '30代', '40代', '50代以上'];
    // 活動レベル
    private $active_levels = ['エンジョイ向け', 'ガチ向け', '競技志向', 'ビギナー', 'スーパービギナー', 'ウルトラビギナー'];
    // 表示件数
    private $view_count = 10;

    public function index()
    {
        $tokyo23 = $this->tokyo23;
        $categorys = $this->categorys;
        $active_levels = $this->active_levels;
        $age_group = $this->age_group;

        // DBからチーム情報をすべて取得する
        $teams = Team::query()->paginate($this->view_count);
        return view('team.search', compact('teams', 'tokyo23', 'categorys', 'active_levels', 'age_group'));
    }

    public function search(Request $request)
    {
        $tokyo23 = $this->tokyo23;
        $categorys = $this->categorys;
        $active_levels = $this->active_levels;
        $age_group = $this->age_group;
        // 検索クエリ
        $query = Team::query();
        // キーワード存在チェック
        if($request->has('keyword')) {
            // キーワード
            $keyword = $request->keyword;
            // 条件を設定する
            $query->where(function ($query) use ($keyword) {
                $query->where('area', 'like', '%'.$keyword.'%')
                    ->orWhere('age_group', 'like', '%'.$keyword.'%')
                    ->orWhere('category', 'like', '%'.$keyword.'%');
            });
        }
        // 10件ごとに表示する
        $teams = $query->paginate($this->view_count);
        return view('team.search', compact('teams', 'tokyo23', 'categorys', 'active_levels', 'age_group'));
    }
}
