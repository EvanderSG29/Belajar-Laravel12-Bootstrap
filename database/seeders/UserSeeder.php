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
        // Create officer
        \App\Models\User::updateOrCreate(
            ['email' => 'officer@example.com'],
            [
                'name' => 'Officer User',
                'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
                'role' => 'officer',
            ]
        );

        // Create students
        \App\Models\User::updateOrCreate(
            ['email' => 'student1@example.com'],
            [
                'name' => 'Student One',
                'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
                'role' => 'user',
            ]
        );

        \App\Models\User::updateOrCreate(
            ['email' => 'student2@example.com'],
            [
                'name' => 'Student Two',
                'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
                'role' => 'user',
            ]
        );
    }
}
