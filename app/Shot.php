<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model    {

    protected $fillable = ['title', 'description', 'file_name', 'file_type', 'category', 'user_id'];

    protected $dates = ['updated_at', 'created_at'];

}
