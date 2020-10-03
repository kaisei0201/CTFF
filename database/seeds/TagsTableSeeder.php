<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tag' => '男性のみ' ,
            ],[
                'tag' => '女性のみ' ,
            ],[
                'tag' => '男女ミックス' ,
            ],[
                'tag' => 'オーバー30' ,
            ],[
                'tag' => '社会人チーム' ,
            ],[
                'tag' => 'ジュニア' ,
            ],[
                'tag' => 'ジュニアユース' ,
            ],[
                'tag' => 'ユース' ,
            ],[
                'tag' => '大学生' ,
            ],[
                'tag' => 'オーバー40' ,
            ]
        ]);
    }
}
