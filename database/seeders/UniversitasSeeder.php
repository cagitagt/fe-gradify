<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Table Universitas seeding started...');

        $univeristas = [
            [
                'name' => 'Universitas Indonesia',
                'slug' => 'universitas-indonesia',
                'address' => 'Jl. Ciledug Raya No. 5, Petukangan Utara, Pesanggrahan, Jakarta Selatan',
                'status_univ' => 'PTN',
                'biaya_kuliah' => 'Rp 10.000.000 - Rp 35.000.000',
                'website' => 'https://www.ui.ac.id/',
                'akreditasi' => 'Unggul',
                'logo' => '/img/UI.png',
                'cover_image' => '/img/picui.jpg',
                'sejarah' => 'Universitas Indonesia (UI) adalah perguruan tinggi yang memiliki sejarah institusi pendidikan paling tua di Asia. Universitas Indonesia sebelumnya adalah sekolah tinggi ilmu kesehatan yang dibangun Belanda pada tahun 1849. Sekolah ini resmi diberi nama sebagai Dokter-Djawa School pada tahun 1851. Dokter-Djawa School kemudian mengalami perubahan nama menjadi School tot Opleiding van Indische Artsen (School of Medicine for Indigenous Doctors), atau disingkat sebagai STOVIA, pada tahun 1898. STOVIA merupakan sekolah untuk para calon dokter terbaik di Indonesia selama 75 tahun, sampai akhirnya ditutup pada tahun 1927. Setelah ditutupnya STOVIA, dibangun Sekolah Kedokteran beserta empat sekolah tinggi lain di beberapa kota di Pulau Jawa, yaitu Technische Hoogeschool te Bandoeng (Fakultas Teknik) di Bandung pada 1920, Recht Hoogeschool (Fakultas Hukum) di Batavia pada 1924, Faculteit der Letteren en Wijsbegeerte (Fakultas Sastra dan Kemanusiaan) di Batavia pada 1940, dan Faculteit van Landbouwweteschap (Fakultas Pertanian) di Bogor pada 1941. Melalui lima sekolah tinggi tersebut, dilahirkan sebuah universitas dengan nama Nood-universiteit (Universitas Darurat) pada tahun 1946. Pada tahun 1947 Nood-universiteit mengalami perubahan nama menjadi Universiteit van Indonesië. Kemudian berubah menjadi Universiteit Indonesia pada 1950. Universitas Indonesia memulai kegiatannya secara resmi dengan rektor pertamanya, yaitu Ir. R.M. Pandji Soerachman pada tanggal 2 Februari 1950. Saat itu Universitas Indonesia memiliki beberapa fakultas yang terbagi di beberapa daerah, yaitu Fakultas Kedokteran, Hukum, Sastra, dan Filsafat di Jakarta; Fakultas Teknik di Bandung; Fakultas Pertanian di Bogor; Fakultas Kedokteran Gigi di Surabaya; serta Fakultas Ekonomi di Makassar. Di tahun 1954-1963 fakultas-fakultas Universitas Indonesia yang berada di luar Jakarta berkembang menjadi universitas. Inilah yang menjadi latar belakang berdirinya perguruan tinggi negeri di berbagai kota di Indonesia. Universitas Indonesia kini memiliki kampus utama yang dibangun pada tahun 1987 di bagian utara Depok, tepatnya di perbatasan antara wilayah Depok dan Jakarta Selatan. Sebelum dibangunnya kampus Depok tersebut, Universitas Indonesia memiliki tiga kampus yang berlokasi di Salemba, Pegangsaan Timur, dan Rawamangun. Kemudian kampus tersebut, kecuali kampus Salemba, pindah setelah kampus Depok yang berada di atas lahan seluas 320 hektare selesai dibangun.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Gadjah Mada',
                'slug' => 'universitas-gadjah-mada',
                'address' => 'Jl. Ciledug Raya No. 5, Petukangan Utara, Pesanggrahan, Jakarta Selatan',
                'status_univ' => 'PTN',
                'biaya_kuliah' => 'Rp 7.000.000 - Rp 60.000.000',
                'website' => 'https://www.ugm.ac.id/',
                'akreditasi' => 'Unggul',
                'logo' => '/img/UGM.png',
                'cover_image' => '/img/picugm.jpg',
                'sejarah' => 'Universitas Gadjah Mada (UGM), salah satu perguruan tinggi tertua dan terkemuka di Indonesia, didirikan pada 19 Desember 1949 di Yogyakarta. UGM lahir sebagai simbol kebangkitan nasional setelah proklamasi kemerdekaan Indonesia. Kehadirannya mencerminkan semangat untuk membangun bangsa melalui pendidikan tinggi, yang kala itu sangat dibutuhkan untuk mencetak generasi pemimpin dan profesional dalam berbagai bidang. Nama "Gadjah Mada" diambil dari Mahapatih Gadjah Mada, seorang tokoh besar dari Kerajaan Majapahit, yang dikenal atas visinya dalam mempersatukan Nusantara. Pada awal pendiriannya, UGM memiliki enam fakultas, yaitu Fakultas Teknik, Fakultas Hukum, Fakultas Kedokteran, Fakultas Pertanian, Fakultas Sastra dan Filsafat, serta Fakultas Ilmu Pendidikan. Aktivitas akademiknya dimulai di berbagai lokasi yang tersebar di Yogyakarta, mengingat keterbatasan fasilitas saat itu. Pada tahun-tahun awal, UGM menjadi salah satu universitas yang berperan besar dalam menciptakan pemimpin-pemimpin bangsa, termasuk di bidang pemerintahan, pendidikan, dan ekonomi.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Brawijaya',
                'slug' => 'universitas-brawijaya',
                'address' => 'Jl. Ciledug Raya No. 5, Petukangan Utara, Pesanggrahan, Jakarta Selatan',
                'status_univ' => 'PTN',
                'biaya_kuliah' => 'Rp 12.000.000 - Rp 55.000.000',
                'website' => 'https://www.ub.ac.id/',
                'akreditasi' => 'Unggul',
                'logo' => '/img/UB.png',
                'cover_image' => '/img/picub.jpg',
                'sejarah' => 'Universitas Brawijaya (UB) adalah salah satu perguruan tinggi ternama di Indonesia yang terletak di Malang, Jawa Timur. Didirikan pada 5 Januari 1963, UB awalnya berstatus sebagai perguruan tinggi swasta dengan nama Universitas Kotapraja Malang. Kemudian, statusnya diubah menjadi perguruan tinggi negeri setelah diterbitkannya Keputusan Presiden Nomor 196 Tahun 1963. Nama "Brawijaya" diambil dari gelar raja-raja Majapahit, yang mencerminkan semangat kejayaan dan keberanian dari kerajaan besar tersebut. Sejak awal berdirinya, UB bertujuan menjadi pusat pendidikan tinggi yang berkontribusi pada pembangunan nasional. Pada tahun-tahun awal, UB memiliki lima fakultas utama: Hukum, Administrasi, Ekonomi, Pertanian, dan Kedokteran Hewan & Peternakan. Dalam perkembangannya, UB terus menambah fakultas dan program studi untuk memenuhi kebutuhan pendidikan di Indonesia. Saat ini, UB memiliki 18 fakultas dan berbagai program studi vokasi, sarjana, magister, hingga doktoral. Perkembangan UB didukung oleh posisinya di kota Malang, yang dikenal sebagai kota pendidikan. Dengan suasana kota yang sejuk dan fasilitas kampus yang terus diperbarui, UB menjadi salah satu universitas yang menarik minat mahasiswa dari berbagai penjuru Indonesia. Selain itu, UB berkomitmen pada pengembangan ilmu pengetahuan, teknologi, dan inovasi yang relevan dengan kebutuhan masyarakat. UB juga aktif dalam meningkatkan perannya di tingkat internasional. Dengan visi menjadi World Class Entrepreneurial University, UB mendorong kolaborasi global melalui program pertukaran mahasiswa, penelitian bersama, dan kerja sama dengan berbagai universitas di luar negeri. Sebagai universitas dengan status Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH), UB terus berupaya menjaga relevansi dan keunggulannya sebagai institusi pendidikan yang unggul dan inovatif.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Diponegoro',
                'slug' => 'universitas-diponegoro',
                'address' => 'Jl. Ciledug Raya No. 5, Petukangan Utara, Pesanggrahan, Jakarta Selatan',
                'status_univ' => 'PTN',
                'biaya_kuliah' => 'Rp 15.000.000 - Rp 40.000.000',
                'website' => 'https://www.undip.ac.id/',
                'akreditasi' => 'Unggul',
                'logo' => '/img/undip.png',
                'cover_image' => '/img/picundip.jpg',
                'sejarah' => 'Universitas Diponegoro (Undip) adalah salah satu perguruan tinggi negeri terkemuka di Indonesia yang berlokasi di Semarang, Jawa Tengah. Undip didirikan pada 9 Januari 1957 dengan nama awal Universitas Semarang, sebagai respon terhadap kebutuhan pendidikan tinggi di Jawa Tengah. Pada 1960, Presiden Soekarno meresmikan universitas ini sebagai perguruan tinggi negeri, sekaligus mengganti namanya menjadi Universitas Diponegoro. Nama ini diambil dari Pangeran Diponegoro, pahlawan nasional yang dikenal karena perannya dalam Perang Jawa melawan kolonialisme Belanda, mencerminkan semangat perjuangan dan kebebasan. Pada awal berdirinya, Undip memiliki beberapa fakultas, seperti Fakultas Hukum, Fakultas Ekonomi, Fakultas Teknik, dan Fakultas Kesehatan. Aktivitas akademiknya dimulai di beberapa gedung yang tersebar di Semarang, dengan keterbatasan fasilitas yang khas pada masa awal pendirian. Namun, semangat para pendirinya untuk menciptakan pusat pendidikan tinggi yang berkualitas terus menggerakkan perkembangan Undip hingga menjadi universitas yang maju dan modern. Seiring waktu, Undip berkembang pesat dan kini memiliki 11 fakultas serta beberapa sekolah pascasarjana dan program studi vokasi. Pada 2009, Undip ditetapkan sebagai Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH), memberikan otonomi lebih dalam pengelolaan institusinya. Kampus utamanya berlokasi di Tembalang, Semarang, dengan lingkungan yang mendukung kegiatan akademik dan riset. Sebagai universitas dengan visi menjadi universitas riset yang unggul, Undip aktif dalam berbagai penelitian inovatif dan kolaborasi internasional. Beragam prestasi di tingkat nasional dan global telah diraih, mencerminkan komitmen Undip dalam memajukan ilmu pengetahuan dan teknologi. Dengan terus mengedepankan semangat kemandirian dan kebangsaan yang diwariskan oleh Pangeran Diponegoro, Undip tetap menjadi salah satu pilihan utama pendidikan tinggi di Indonesia.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Airlangga',
                'slug' => 'universitas-airlangga',
                'address' => 'Jl. Ciledug Raya No. 5, Petukangan Utara, Pesanggrahan, Jakarta Selatan',
                'status_univ' => 'PTN',
                'biaya_kuliah' => 'Rp 8.000.000 - Rp 65.000.000',
                'website' => 'https://www.unair.ac.id/',
                'akreditasi' => 'Unggul',
                'logo' => '/img/UNAIR.png',
                'cover_image' => '/img/picunair.jpg',
                'sejarah' => 'Universitas Airlangga (Unair) adalah salah satu universitas tertua dan terkemuka di Indonesia, yang terletak di Surabaya, Jawa Timur. Unair secara resmi didirikan pada 10 November 1954, bertepatan dengan peringatan Hari Pahlawan. Nama "Airlangga" diambil dari Raja Airlangga, seorang penguasa besar Kerajaan Kahuripan yang dikenal atas kontribusinya dalam memajukan peradaban dan kemakmuran di Jawa Timur. Nama ini mencerminkan semangat Unair untuk menjadi lembaga pendidikan yang memajukan ilmu pengetahuan demi kesejahteraan bangsa. Sejarah Unair bermula dari dua institusi pendidikan tinggi yang sudah ada sebelumnya: Sekolah Kedokteran (School tot Opleiding van Indische Artsen, STOVIA) yang didirikan pada 1913, dan Sekolah Kedokteran Gigi (Nederlandsch Indische Artsen School, NIAS) yang berdiri pada 1928. Setelah kemerdekaan Indonesia, pemerintah menyatukan kedua institusi ini menjadi bagian dari Unair, sekaligus menambah fakultas-fakultas lain untuk memperluas cakupan pendidikannya. Pada awal berdirinya, Unair memiliki dua fakultas, yaitu Fakultas Kedokteran dan Fakultas Kedokteran Gigi. Dalam perkembangannya, universitas ini terus menambah fakultas baru untuk menjawab kebutuhan pendidikan tinggi di berbagai bidang. Saat ini, Unair memiliki 15 fakultas, yang meliputi ilmu kesehatan, sosial-humaniora, sains, dan teknologi. Kampus utamanya berada di kawasan Mulyorejo, Surabaya, dengan fasilitas yang modern untuk mendukung pendidikan, penelitian, dan pengabdian masyarakat. Sebagai perguruan tinggi negeri dengan status Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH), Unair memiliki otonomi dalam mengelola institusinya dan terus berkomitmen untuk menjadi universitas kelas dunia. Dengan motto *Excellence with Morality*, Unair berfokus pada pengembangan pendidikan yang tidak hanya unggul secara akademik, tetapi juga menjunjung tinggi nilai-nilai moral. Unair terus berperan aktif dalam pengembangan ilmu pengetahuan, teknologi, dan inovasi yang bermanfaat bagi masyarakat Indonesia maupun dunia.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Universitas Hasanuddin',
                'slug' => 'universitas-hasanuddin',
                'address' => 'Jl. Ciledug Raya No. 5, Petukangan Utara, Pesanggrahan, Jakarta Selatan',
                'status_univ' => 'PTN',
                'biaya_kuliah' => 'Rp 5.000.000 - Rp 25.000.000',
                'website' => 'https://www.unhas.ac.id/',
                'akreditasi' => 'Unggul',
                'logo' => '/img/UNHAS.png',
                'cover_image' => '/img/picunhas.jpg',
                'sejarah' => 'Universitas Hasanuddin (Unhas) adalah salah satu perguruan tinggi terbesar dan tertua di Indonesia yang terletak di Makassar, Sulawesi Selatan. Unhas didirikan pada 10 September 1956, dengan tujuan untuk menyediakan pendidikan tinggi yang berkualitas di wilayah Indonesia Timur. Nama "Hasanuddin" diambil dari Pahlawan Nasional Sultan Hasanuddin, yang dikenal sebagai pemimpin kerajaan Gowa-Tallo dan pejuang yang berani melawan penjajahan Belanda pada abad ke-17. Nama ini menggambarkan semangat perjuangan dan kebanggaan daerah dalam membangun bangsa melalui pendidikan. Awalnya, Unhas merupakan perguruan tinggi swasta yang terdiri dari beberapa fakultas, antara lain Fakultas Hukum, Fakultas Ekonomi, dan Fakultas Teknik. Namun, pada 1963, Unhas berstatus perguruan tinggi negeri, dan sejak saat itu berkembang menjadi salah satu universitas yang sangat berpengaruh di kawasan Indonesia Timur. Dalam perkembangannya, Unhas terus berkembang pesat dengan menambah fakultas-fakultas baru dan berbagai program studi. Saat ini, Unhas memiliki 16 fakultas, yang mencakup berbagai disiplin ilmu, mulai dari ilmu sosial dan humaniora, sains, teknologi, hingga kedokteran. Universitas ini juga memiliki program pascasarjana dan sekolah vokasi yang mendukung pengembangan keilmuan lebih lanjut. Kampus utama Unhas terletak di Tamalanrea, Makassar, dengan fasilitas yang terus diperbarui untuk mendukung kegiatan akademik, penelitian, dan pengabdian masyarakat. Sebagai Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH), Unhas memiliki otonomi lebih dalam mengelola dan mengembangkan institusinya. Dalam beberapa tahun terakhir, Unhas semakin dikenal sebagai universitas yang unggul dalam riset dan memiliki banyak kerjasama internasional dengan universitas-universitas ternama di dunia. Unhas juga berkomitmen untuk menghasilkan lulusan yang memiliki kualitas akademik tinggi, serta kepedulian terhadap perkembangan sosial dan budaya. Dengan visi untuk menjadi universitas yang berkelas dunia, Unhas terus berupaya mengembangkan diri sebagai pusat ilmu pengetahuan yang berkontribusi pada pembangunan Indonesia, khususnya di wilayah Indonesia Timur.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $fakultas = [
            [
                'name' => 'Fakultas Kedokteran',
                'universitas_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Kedokteran Gigi',
                'universitas_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Kesehatan Masyarakat',
                'universitas_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
                'universitas_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ilmu Pengetahuan Budaya',
                'universitas_id' => 2,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Psikologi',
                'universitas_id' => 2,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
                'universitas_id' => 2,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ilmu Komputer',
                'universitas_id' => 3,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Hukum',
                'universitas_id' => 3,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ekonomi dan Bisnis',
                'universitas_id' => 3,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Kedokteran',
                'universitas_id' => 4,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Kedokteran Gigi',
                'universitas_id' => 4,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Kesehatan Masyarakat',
                'universitas_id' => 4,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Farmasi',
                'universitas_id' => 5,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
                'universitas_id' => 5,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Teknik',
                'universitas_id' => 5,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Hukum',
                'universitas_id' => 6,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ekonomi dan Bisnis',
                'universitas_id' => 6,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Ilmu Pengetahuan Budaya',
                'universitas_id' => 6,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fakultas Psikologi',
                'universitas_id' => 6,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('universitas')->insert($univeristas);

        DB::table('fakultas')->insert($fakultas);

        $this->command->info('Table Universitas seeding completed!');
    }
}
