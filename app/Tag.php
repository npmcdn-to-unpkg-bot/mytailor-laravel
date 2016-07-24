<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Get all shots associated with the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shots()
    {
        return $this->belongsToMany(Shot::class)->withTimestamps();
    }
}
