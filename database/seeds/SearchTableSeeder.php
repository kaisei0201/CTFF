<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('teams')->insert([
                [
                    'category' => '学生チーム',
                    'member_count' => '5人' ,
                    'representative' => 'テスト君' ,
                    'area' => '足立区' ,
                    'age-group' => '10代' ,
                    'mood_enjoy' => 'エンジョイ5',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
