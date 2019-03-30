<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';
    protected $guarded = [];
    public function region()
    {
        return $this->belongsTo('App\Region','region_id','id');
    }
}

