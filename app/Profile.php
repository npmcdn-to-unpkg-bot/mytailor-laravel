<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['avatar', 'username'];

        public function User(){
    	return $this->belongsTo(User::class);
	}

    public function getAvatarAttribute($value)
    {
       return !$value? 'avatar.png' : $value;


    }
}
