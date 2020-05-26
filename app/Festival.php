<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Festival extends Model
{
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
