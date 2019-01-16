<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rodrigo',
            'email' => 'rodriporon2@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Walt',
            'email' => 'walt@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}
