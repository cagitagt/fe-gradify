<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Table User seeding started...');

        DB::table('users')->insert([
            [
                'fullname' => 'Admin 123',
                'username' => 'admin123',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('admin123'),
                'phone' => '081234567890',
                'role' => 'admin',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Teacher Sugeng',
                'username' => 'teachersugeng',
                'email' => 'teacher123@gmail.com',
                'password' => Hash::make('teacher123'),
                'phone' => '081234227890',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Student Rangga',
                'username' => 'studentrangga',
                'email' => 'student123@gmail.com',
                'password' => Hash::make('student123'),
                'phone' => '081288567890',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        $this->command->info('Table User seeding completed!');
    }
}
