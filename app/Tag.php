<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function shots()
    {
        return $this->belongsToMany('MyTailor\Shot');
    }
}
