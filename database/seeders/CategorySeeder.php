<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Table Category seeding started...');

        DB::table('categories')->insert([
            [
                'title' => 'PU',
                'name' => 'Penalaran Umum',
                'slug' => 'penalaran-umum',
                'description' => 'Materi penalaran umum',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'PM',
                'name' => 'Penalaran Matematika',
                'slug' => 'penalaran-matematika',
                'description' => 'Materi penalaran matematika',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'PK',
                'name' => 'Pengetahuan Kuantitatif',
                'slug' => 'pengetahuan-kuantitatif',
                'description' => 'Materi pengetahuan kuantitatif',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'PPU',
                'name' => 'Pengetahuan dan Pemahaman Umum',
                'slug' => 'pengetahuan-dan-pemahaman-umum',
                'description' => 'Materi pengetahuan dan pemahaman umum',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'PBM',
                'name' => 'Pemahanan Bacaan dan Menulis',
                'slug' => 'pemahaman-bacaan-dan-menulis',
                'description' => 'Materi pemahaman bacaan dan menulis',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'LBIND',
                'name' => 'Literasi Bahasa Indonesia',
                'slug' => 'literasi-bahasa-indonesia',
                'description' => 'Materi literasi bahasa Indonesia',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'LBING',
                'name' => 'Literasi Bahasa Inggris',
                'slug' => 'literasi-bahasa-inggris',
                'description' => 'Materi literasi bahasa Inggris',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'UMUM',
                'name' => 'Materi Umum',
                'slug' => 'materi-umum',
                'description' => 'Materi Umum',

                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $this->command->info('Table Category seeding completed!');
    }
}
