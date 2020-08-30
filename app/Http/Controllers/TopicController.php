<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function topics() {
        return Topic::all();
    }

    public function topic($id) {
        return Topic::find($id);
    }
}
