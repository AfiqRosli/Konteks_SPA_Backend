<?php

use Illuminate\Database\Seeder;

use App\Topic;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = collect(
            [
                [
                    'title' => 'myself',
                    'src' => '/img/topic/myself.jpg'
                ],
                [
                    'title' => 'hobbies',
                    'src' => '/img/topic/hobbies.jpg'
                ],
                [
                    'title' => 'travelling',
                    'src' => '/img/topic/travelling.jpg'
                ],
                [
                    'title' => 'food & drink',
                    'src' => '/img/topic/food_drink.jpg'
                ],
                [
                    'title' => 'accomplishments',
                    'src' => '/img/topic/accomplishments.jpg'
                ],
                [
                    'title' => 'celebrities',
                    'src' => '/img/topic/celebrities.jpg'
                ],
                [
                    'title' => 'animals',
                    'src' => '/img/topic/animals.jpg'
                ],
                [
                    'title' => 'books',
                    'src' => '/img/topic/books.jpg'
                ],
                [
                    'title' => 'movies',
                    'src' => '/img/topic/movies.jpg'
                ],
                [
                    'title' => 'cars',
                    'src' => '/img/topic/cars.jpg'
                ],
                [
                    'title' => 'camping',
                    'src' => '/img/topic/camping.jpg'
                ],
                [
                    'title' => 'hiking',
                    'src' => '/img/topic/hiking.jpg'
                ]
            ]
        );

        foreach($topics as $topic) {
            Topic::create($topic);
        }
    }
}
