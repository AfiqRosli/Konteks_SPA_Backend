<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonContent extends Model
{
    protected $fillable = [
        'lesson_id',
        'order',
        'name',
        'lang',
        'lang_translation',
        'says',
        'says_translation',
        'user_input'
    ];

    public function lesson() {
        return $this->belongsTo('App\Lesson');
    }
}
