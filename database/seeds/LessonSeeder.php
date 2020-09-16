<?php

use Illuminate\Database\Seeder;
use App\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = collect([
            [
                'topic_id' => 1,
                'type' => 0,
                'opening' => 'First session in class',
                'title' => 'Ice Breaking',
                'context' => 'You are in a classroom and eveyone are asked to introduce themselves. Now, it\'s your turn.',
            ],
            [
                'topic_id' => 1,
                'type' => 0,
                'opening' => 'You are in an',
                'title' => 'Interview',
                'context' => 'You are in an interview to get a web developer position and the interviewer wanted to know about you.',
            ],
            [
                'topic_id' => 1,
                'type' => 0,
                'opening' => 'Someone asked',
                'title' => 'What do you do?',
                'context' => 'You are in an event. Ahmad is approaching you and starts a conversion. At some point, he asked "what do you do?"',
            ]
        ]);

        foreach($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
