<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
