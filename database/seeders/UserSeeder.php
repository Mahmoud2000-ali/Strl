<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 13; $i++) {
            User::create([
                'first_name' => fake()->name(),
                'last_name' => ' demo',
                'username' => "demo $i",
                'email' =>  fake()->unique()->safeEmail(),
                'phone_number' => '08218746',
                'email_verified_at' => now(),
                'password' => Hash::make(12345678), // password
                'remember_token' => Str::random(10),
            ]);
        }
    } //-- end of function
}//-- end class UserSeeder
