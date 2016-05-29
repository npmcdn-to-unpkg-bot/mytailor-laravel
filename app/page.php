<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = ['title', 'name', 'uri', 'content'];
}
