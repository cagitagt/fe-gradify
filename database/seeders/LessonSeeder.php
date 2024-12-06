<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Table Lesson seeding started...');

        DB::table('lessons')->insert([
            [
                'course_id' => 1,
                'name' => 'Verba Logic',
                'video_url' => 'https://www.youtube.com/embed/IKCHh53ML10',
                'content' => 'Verba logic adalah istilah yang merujuk pada kata kerja yang digunakan untuk menyatakan hubungan logis antara gagasan, konsep, atau tindakan dalam suatu kalimat atau argumen. Kata kerja ini berfungsi untuk menjelaskan hubungan sebab-akibat, implikasi, syarat, tujuan, atau hubungan lainnya yang bersifat logis. Misalnya, kata seperti "menyebabkan" menunjukkan hubungan kausal antara dua peristiwa, "mengimplikasikan" menandakan adanya kesimpulan logis, dan "mengasumsikan" digunakan untuk menyatakan suatu dasar pemikiran atau hipotesis. Dalam konteks akademik atau ilmiah, verba logic sering digunakan untuk menyusun argumen yang terstruktur dengan baik, sehingga membantu pembaca memahami alur pemikiran yang disampaikan penulis. Selain itu, dalam dunia teknologi dan pemrograman, konsep verba logic juga dapat diterapkan dalam bentuk operasi logika seperti AND, OR, dan NOT, yang digunakan untuk memproses data atau mengontrol alur kerja dalam sistem berbasis logika. Dengan demikian, verba logic memiliki peran penting dalam membantu menyampaikan ide secara sistematis, baik dalam komunikasi verbal maupun tertulis, serta dalam pengembangan sistem berbasis logika.',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 1,
                'name' => 'Thinking and Reasoning',
                'video_url' => 'https://www.youtube.com/embed/DOX2gZp6D2U?si=LT9mK5ryN_CIeVhR',
                'content' => 'Thinking adalah proses mental umum yang melibatkan pembentukan ide, imajinasi, atau pemecahan masalah, baik secara abstrak maupun konkret, seringkali dipengaruhi oleh emosi, intuisi, atau pengalaman. Sementara itu, reasoning adalah bentuk berpikir yang lebih terstruktur dan logis, digunakan untuk menarik kesimpulan atau memecahkan masalah berdasarkan bukti atau prinsip tertentu. Meski saling berkaitan, thinking mencakup berbagai bentuk seperti kreativitas dan refleksi, sedangkan reasoning berfokus pada pendekatan sistematis untuk mencapai keputusan yang rasional.',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 1,
                'name' => 'Thinking and Reasoning 2',
                'video_url' => '',
                'content' => 'Thinking adalah proses mental umum yang melibatkan pembentukan ide, imajinasi, atau pemecahan masalah, baik secara abstrak maupun konkret, seringkali dipengaruhi oleh emosi, intuisi, atau pengalaman. Sementara itu, reasoning adalah bentuk berpikir yang lebih terstruktur dan logis, digunakan untuk menarik kesimpulan atau memecahkan masalah berdasarkan bukti atau prinsip tertentu. Meski saling berkaitan, thinking mencakup berbagai bentuk seperti kreativitas dan refleksi, sedangkan reasoning berfokus pada pendekatan sistematis untuk mencapai keputusan yang rasional.',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 1,
                'name' => 'Overview Argumen',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 2,
                'name' => 'Logika Matematika',
                'video_url' => 'https://www.youtube.com/embed/mQ7uzPCTApE?si=hk8jJAINiu17Prrk',
                'content' => 'Logika matematika adalah cabang matematika yang mempelajari prinsip-prinsip penalaran yang valid serta struktur dasar dari argumen logis. Dalam logika matematika, digunakan simbol-simbol formal untuk merepresentasikan pernyataan dan hubungan antar pernyataan, memungkinkan analisis yang sistematis dan bebas dari ambiguitas. Konsep utamanya mencakup proposisi, operator logika seperti "dan" (∧), "atau" (∨), "tidak" (¬), dan "implikasi" (→), serta metode pembuktian seperti tabel kebenaran, deduksi, dan kontradiksi. Logika matematika berperan penting dalam komputasi, teori himpunan, dan pengembangan algoritma, karena memberikan dasar formal untuk berpikir secara rasional dan menyelesaikan masalah dengan presisi.',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 2,
                'name' => 'Logika Matematika 2',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 2,
                'name' => 'Logika Kuantor',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 2,
                'name' => 'Logika dalam Paragraf',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 2,
                'name' => 'Kualitas Simpulan',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 3,
                'name' => 'Overview Penalaran Induktif',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 3,
                'name' => 'Pola Bilangan dan Huruf',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 3,
                'name' => 'Kode Sandi',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 3,
                'name' => 'Pola Gambar',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 4,
                'name' => 'Bilangan',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 4,
                'name' => 'Dasar Aljabar',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 4,
                'name' => 'Mathematical Modelling and Ratio',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'course_id' => 4,
                'name' => 'Ukuran Pemusatan Data Tunggal',
                'video_url' => '',
                'content' => '',
                'duration' => 0,

                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $this->command->info('Table Lesson seeding completed!');
    }
}
