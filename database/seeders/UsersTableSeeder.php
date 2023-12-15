<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'David Waichari',
            'username' => 'dwaichari',
            'email' => 'dwaichari@gmail.com',
            'password' => bcrypt('12345678!')
        ]);
    }
}
