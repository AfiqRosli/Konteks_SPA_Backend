<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('topics', 'API\TopicController');
    Route::get('topics/{topic}/lessons', 'API\TopicController@index')->name('topics.lessons.index');

    Route::apiResource('lessons', 'API\LessonController');
    Route::get('lessons/{lesson}/lesson_contents', 'API\LessonController@index')->name('lessons.lessons_contents.index');

    Route::apiResource('lesson_contents', 'API\LessonContentController');
});
