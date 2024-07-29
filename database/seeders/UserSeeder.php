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
    public function run(): void
    {
        User::create([
            'first_name' => 'Wahyu',
            'last_name' => 'Mardiansyah Yusuf',
            'username' => 'badax',
            'email' => 'badax.089@gmail.com',
            'password' => 'Badax1992',
        ]);
    }
}
