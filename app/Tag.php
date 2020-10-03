<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // モデルと関連しているテーブル
    protected $table = 'tags';

    public function teams()
    {
        return $this->belongsToMany('App\Team', 'team_tags');
    }
}
