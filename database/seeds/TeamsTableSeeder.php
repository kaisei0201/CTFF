<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'テストチーム_1',
                'name_kana' => 'テストチーム_1' ,
                'mood_enjoy' => '1' ,
                'mood_sanity' => '5' ,
                'create_time' => '2000年5月' ,
                'age_group' => '20代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '競技系チーム',
                'member_count' => '5',
                'area' => '新宿区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_2',
                'name_kana' => 'テストチーム_2' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '3' ,
                'create_time' => '2000年6月' ,
                'age_group' => '30代' ,
                'introduction' => 'よろしくお願いします。楽しみましょう。' ,
                'representative' => 'テスト代表',
                'category' => 'レディースチーム',
                'member_count' => '4',
                'area' => '豊島区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_3',
                'name_kana' => 'テストチーム_3' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '5' ,
                'create_time' => '2005年7月' ,
                'age_group' => '20代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '社会人チーム',
                'member_count' => '12',
                'area' => '渋谷区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_4',
                'name_kana' => 'テストチーム_4' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '5' ,
                'create_time' => '2000年10月' ,
                'age_group' => '30代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '社会人チーム',
                'member_count' => '12',
                'area' => '渋谷区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_5',
                'name_kana' => 'テストチーム_5' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '5' ,
                'create_time' => '2008年9月' ,
                'age_group' => '30代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '社会人チーム',
                'member_count' => '12',
                'area' => '渋谷区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_6',
                'name_kana' => 'テストチーム_6' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '5' ,
                'create_time' => '2004年5月' ,
                'age_group' => '20代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '社会人チーム',
                'member_count' => '12',
                'area' => '渋谷区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_7',
                'name_kana' => 'テストチーム_7' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '5' ,
                'create_time' => '2020年5月' ,
                'age_group' => '20代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '社会人チーム',
                'member_count' => '12',
                'area' => '渋谷区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'テストチーム_8',
                'name_kana' => 'テストチーム_8' ,
                'mood_enjoy' => '5' ,
                'mood_sanity' => '5' ,
                'create_time' => '2000年12月' ,
                'age_group' => '20代' ,
                'introduction' => 'よろしくお願いします。' ,
                'representative' => 'テスト代表',
                'category' => '社会人チーム',
                'member_count' => '12',
                'area' => '渋谷区',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
