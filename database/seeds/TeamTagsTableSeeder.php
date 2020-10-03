<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_tags')->insert([
            [
                'team_id' => '1' ,
                'tag_id' => '1' ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'team_id' => '1' ,
                'tag_id' => '4' ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'team_id' => '1' ,
                'tag_id' => '5' ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'team_id' => '2' ,
                'tag_id' => '3' ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'team_id' => '2' ,
                'tag_id' => '6' ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
