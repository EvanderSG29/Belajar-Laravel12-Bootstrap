<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@email.com'],
            [
                'name' => 'Admin',
                'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
                'role' => 2,
            ]
        );

        // Create users
        \App\Models\User::updateOrCreate(
            ['email' => 'student1@email.com'],
            [
                'name' => 'Student One',
                'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
                'role' => 0,
            ]
        );

        \App\Models\User::updateOrCreate(
            ['email' => 'student2@email.com'],
            [
                'name' => 'Student Two',
                'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
                'role' => 0,
            ]
        );
    }
}
