<?php

use Illuminate\Database\Seeder;
use App\LessonContent;

class LessonContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessonContents = collect([
            [
                'lesson_id' => 3,
                'order' => 0,
                'name' => 'Ahmad',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Kau buat apa?',
                'says_translation' => 'What do you do?',
                'user_input' => 0,
            ],
            [
                'lesson_id' => 3,
                'order' => 1,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Aku keraja sebagai tukang gambar professional.',
                'says_translation' => 'I work as a professional photographer.',
                'user_input' => 1,
            ],
            [
                'lesson_id' => 3,
                'order' => 2,
                'name' => 'Ahmad',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Apa saja jenis gambar kau ambil?',
                'says_translation' => 'What type of photos do you take?',
                'user_input' => 0,
            ],
            [
                'lesson_id' => 3,
                'order' => 3,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Kebanyakkannya gambar orang kahwin.',
                'says_translation' => 'Mostly wedding photographs.',
                'user_input' => 1,
            ]
        ]);

        foreach($lessonContents as $lessonContent) {
            LessonContent::create($lessonContent);
        }
    }
}
