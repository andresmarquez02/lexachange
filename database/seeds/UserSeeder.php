<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Andres Marquez",
            "email" => "andres@gmail.com",
            "password" => bcrypt("12345678"),
            "remember_token" => csrf_token()
        ]);
    }
}
