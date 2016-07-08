<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * A shot is owned by a publisher.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile()
    {
        return $this->hasOne(Profile::class, 'id')
            ->select(['id', 'username', 'avatar']); //Profile is your profile model
    }

    /**
     * A shot is owned by a publisher.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shots()
    {

        return $this->morphMany(Shot::class, 'publishable_id');
    }
}