<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Festival extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'starts_at',
        'ends_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
