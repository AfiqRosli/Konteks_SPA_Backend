<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        "topic_id",
        "type",
        "opening",
        "title",
        "context"
    ];

    public function topic() {
        return $this->belongsTo('App\Topic');
    }

    public function lessonContents() {
        return $this->hasMany('App\LessonContent');
    }
}
