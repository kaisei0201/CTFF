<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // モデルと関連しているテーブル
    protected $table = 'teams';

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'team_tags');
    }
}
