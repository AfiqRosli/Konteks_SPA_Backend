<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Afiq',
            'email' => 'afiq_rosli@live.com',
            'password' => Hash::make('password'),
        ]);
    }
}
