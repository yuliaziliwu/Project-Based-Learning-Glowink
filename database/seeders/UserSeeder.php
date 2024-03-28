<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email'=> 'admin1@gmail.com',
            'password'=> bcrypt('admin1'),
            'email_verified_at' => now()
        ]);
    }
}
