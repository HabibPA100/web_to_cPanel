<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name' => 'User',
           'phone'=>'01885451772',
           'email' => 'user@gmail.com',
           'password' => bcrypt('11111111'),
           'role' => 'user',
        ]);
        User::create([
            'name' => 'Admin',
            'phone'=>'01885451773',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'admin',
         ]);
         User::create([
            'name' => 'Parent',
            'phone'=>'01885451774',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'parent',
         ]);
         User::create([
            'name' => 'Teacher',
            'phone'=>'01885451775',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'teacher',
         ]);
    }
}
