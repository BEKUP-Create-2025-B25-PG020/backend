<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@mantra.com',
                'password' => Hash::make('password@123'), // password default: "password"
            ],
            [
                'name' => 'User Satu',
                'email' => 'user1@mantra.com',
                'password' => Hash::make('password123'),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
