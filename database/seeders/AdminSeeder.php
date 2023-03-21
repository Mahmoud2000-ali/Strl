<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'first_name' => 'mahmoud',
            'last_name' => 'ali',
            'username' => 'super_admin',
            'email' => 'super_admin@strl.com',
            'phone_number' => '082132547',
            'email_verified_at' => now(),
            'password' => Hash::make(12345678), // password
            'remember_token' => Str::random(10),
        ]);
    } //--- end of run
}//-- end class AdminSeeder
