<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Table Course seeding started...');

        DB::table('courses')->insert([
            [
                'name' => 'Pengenalan Penalaran Induktif dan Deduktif',
                'category_id' => 1,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Penalaran Deduktif',
                'category_id' => 1,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Penalaran Induktif',
                'category_id' => 1,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Penalaran Kuantitatif',
                'category_id' => 1,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Penalaran Induktif dan Deduktif',
                'category_id' => 2,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Penalaran Induktif dan Deduktif',
                'category_id' => 3,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Penalaran Deduktif',
                'category_id' => 4,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Penalaran Induktif',
                'category_id' => 5,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Penalaran Kuantitatif',
                'category_id' => 6,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Penalaran Deduktif',
                'category_id' => 7,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Web Development',
                'category_id' => 8,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pengenalan Akuntansi',
                'category_id' => 8,
                'teacher_id' => 2,
                'progress' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $this->command->info('Table Course seeding completed!');
    }
}
