<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class)
            ->select(['username','avatar']);
    }
}
