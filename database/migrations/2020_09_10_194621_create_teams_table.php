<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // チーム名
            $table->string('name_kana'); // チーム名フリガナ
            $table->string('mood_enjoy'); // 雰囲気エンジョイ度
            $table->string('mood_sanity'); // 雰囲気ガチ度
            $table->string('create_time'); // 結成時期
            $table->string('age_group'); // 年齢層
            $table->string('introduction'); // チーム紹介
            $table->string('representative'); //代表者
            $table->string('category'); //カテゴリー
            $table->string('member_count'); //メンバー人数
            $table->string('area'); //活動エリア
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
