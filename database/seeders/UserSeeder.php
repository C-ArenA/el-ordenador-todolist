<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Carlos Arena',
            'email' => 'arenacarlos.ca@gmail.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'Cristian Arana',
            'email' => 'aranacris.ca@gmail.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'Yhassir Valdez',
            'email' => 'valdezyhass.yv@gmail.com',
            'password' => 'password',
        ]);
    }
}
