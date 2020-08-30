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
                    'desc' => 'This topic purpose is to help you communicate about yourself for example; your name, where you live, age, hobbies and etc.',
                    'src' => '/img/topic/myself.jpg'
                ],
                [
                    'title' => 'hobbies',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/hobbies.jpg'
                ],
                [
                    'title' => 'travelling',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/travelling.jpg'
                ],
                [
                    'title' => 'food & drink',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/food_drink.jpg'
                ],
                [
                    'title' => 'accomplishments',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/accomplishments.jpg'
                ],
                [
                    'title' => 'celebrities',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/celebrities.jpg'
                ],
                [
                    'title' => 'animals',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/animals.jpg'
                ],
                [
                    'title' => 'books',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/books.jpg'
                ],
                [
                    'title' => 'movies',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/movies.jpg'
                ],
                [
                    'title' => 'cars',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/cars.jpg'
                ],
                [
                    'title' => 'camping',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/camping.jpg'
                ],
                [
                    'title' => 'hiking',
                    'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui velit voluptatibus nihil impedit atque ad optio non ea similique cumque?',
                    'src' => '/img/topic/hiking.jpg'
                ]
            ]
        );

        foreach($topics as $topic) {
            Topic::create($topic);
        }
    }
}
