<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';
    protected $guarded = [];
    public function customer()
    {
        return $this->belongsTo('App\User','customer_id','id');
    }
	 public function doctor()
    {
        return $this->belongsTo('App\User','doctor_id','id');
    }
}

