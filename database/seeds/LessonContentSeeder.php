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
                'lesson_id' => 1,
                'order' => 0,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Hello! Nama ku [nama]',
                'says_translation' => 'Hello! My name is [name].',
                'user_input' => 1,
                'synonyms' => ''
            ],
            [
                'lesson_id' => 1,
                'order' => 1,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Umurku 22 tahun.',
                'says_translation' => 'I am 22 years old.',
                'user_input' => 1,
                'synonyms' => ''
            ],
            [
                'lesson_id' => 1,
                'order' => 2,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Aku tinggal di kampung Mulaut.',
                'says_translation' => 'I live in the Mulaut\'s village.',
                'user_input' => 1,
                'synonyms' => '{"live": ["reside"]}'
            ],
            [
                'lesson_id' => 2,
                'order' => 0,
                'name' => 'Interviewer',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Ceritakan lagi mengenai diri mu.',
                'says_translation' => 'Tell me more about yourself.',
                'user_input' => 0,
                'synonyms' => ''
            ],
            [
                'lesson_id' => 2,
                'order' => 1,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Sebelum ani, aku bekeraja sebagai full-stack developer arah Emas.',
                'says_translation' => 'Previously, I work as a full-stack developer at Emas.',
                'user_input' => 1,
                'synonyms' => '{"previously": ["before this", "formerly"]}'
            ],
            [
                'lesson_id' => 2,
                'order' => 2,
                'name' => 'Interviewer',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Apa saja technology yang kau pakai?',
                'says_translation' => 'What technologies do you use?',
                'user_input' => 0,
                'synonyms' => ''
            ],
            [
                'lesson_id' => 2,
                'order' => 3,
                'name' => 'You',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Aku pakai Firebase untuk back-end nya sama Vue.js untuk front-end nya',
                'says_translation' => 'I use Firebase for the back-end and Vue.js for the front-end',
                'user_input' => 1,
                'synonyms' => '{"use": ["utilize", "employ", "apply", "make use of"]}'
            ],
            [
                'lesson_id' => 3,
                'order' => 0,
                'name' => 'Ahmad',
                'lang' => 'ms-bn',
                'lang_translation' => 'en-gb',
                'says' => 'Kau buat apa?',
                'says_translation' => 'What do you do?',
                'user_input' => 0,
                'synonyms' => ''
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
                'synonyms' => ''
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
                'synonyms' => ''
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
                'synonyms' => '{"mostly": ["mainly", "primarily", "predominantly"]}'
            ]
        ]);

        foreach($lessonContents as $lessonContent) {
            LessonContent::create($lessonContent);
        }
    }
}
