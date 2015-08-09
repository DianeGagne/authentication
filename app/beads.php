<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beads extends Model
{
    /**
     * get the finishes associated with the beads
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function finishes()
    {
        return $this->belongsToMany('App\finishes')->withTimestamps();
    }
}
