<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ["title", "desc","src"];

    public function lessons() {
        return $this->hasMany('App\Lesson');
    }
}
