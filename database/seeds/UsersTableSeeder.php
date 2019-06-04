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

            'name'=>'Gustavo Nogueira',
            'email'=>'gustavoasnogueira@gmail.com',
            'password'=>bcrypt('167943'),
        ]);
    }
}
