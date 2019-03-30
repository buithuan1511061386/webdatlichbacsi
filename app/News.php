<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = [];
    public function typeofnews()
    {
        return $this->belongsTo('App\Typeofnews','typeofnews_id','id');
    }
}

