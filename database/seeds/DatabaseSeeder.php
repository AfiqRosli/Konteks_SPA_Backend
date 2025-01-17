<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(LessonContentSeeder::class);
    }
}
