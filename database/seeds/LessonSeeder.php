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
                'context' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
            ],
            [
                'topic_id' => 1,
                'type' => 0,
                'opening' => 'You are in an',
                'title' => 'Interview',
                'context' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
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
