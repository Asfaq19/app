<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
