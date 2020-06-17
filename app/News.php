<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    public function news_comment()
    {
        return $this->hasMany('App\NewsComment', 'news_id', 'id');
    }
}
