<x-layout>
    {{-- Section IMG Start --}}
    <div class="mt-16 relative w-full bg-black h-[420px]">
        <img src="/img/picui.jpg" alt="" class="absolute object-cover w-full h-full z-3">
        
        <div class="absolute bottom-0 w-full h-36 bg-gradient-to-t from-white z-4 "></div>
    </div>
    {{-- Section IMG End --}}

    
    <div class="my-20 max-h-min  w-[1000px] mx-auto ">
        {{-- Section Information Start --}}
        <section class="w-full mb-40">
            <h1 class="mb-1 text-6xl font-bold">Universitas Indonesia</h1>
            <p class="mb-16">Jalan Margonda Raya, Pondok Cina, Kecamatan Beji, Kota Depok, 16424</p>
            <div class="border rounded-lg border-slate-950 ">
                <div class="flex gap-2 py-3">
                    <div class="w-[400px]">
                        <div class="p-5 ">
                            <div class="flex flex-wrap gap-4 text-white">
                                <div class="px-4 py-1 bg-blue-700 rounded-xl ">Status: PTN</div>
                                <div class="px-4 py-1 bg-violet-600 rounded-xl ">Akreditasi: Unggul</div>
                                <div class="px-4 py-1 bg-yellow-500 rounded-xl ">Website: ui.ac.id</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[400px]">
                        <div class="p-5">
                            <h1 class="text-lg font-bold ">Biaya Kuliah</h1>
                            <p class="mb-2">Rp500.000 - Rp20.000.000 per Semester</p>
                            <h1 class="text-lg font-bold ">Lokasi</h1>
                            <p>Kota Jakarta Pusat, DKI Jakarta</p>
                        </div>
                    </div>
                    <div class="w-[200px] m-auto">
                        <img src="/img/uilogo.png" alt="logo-univ" class="w-32 mx-auto">
                    </div>
                </div>
            </div>


            {{-- Sejarah start --}}
            <section class="my-20">
                <h1 class="mb-5 text-4xl font-bold">Sejarah</h1>
                <p class="text-justify">
                    Universitas Indonesia (UI) adalah perguruan tinggi yang memiliki sejarah institusi pendidikan paling tua di Asia. Universitas Indonesia sebelumnya adalah sekolah tinggi ilmu kesehatan yang dibangun Belanda pada tahun 1849. Sekolah ini resmi diberi nama sebagai Dokter-Djawa School pada tahun 1851. Dokter-Djawa School kemudian mengalami perubahan nama menjadi School tot Opleiding van Indische Artsen (School of Medicine for Indigenous Doctors), atau disingkat sebagai STOVIA, pada tahun 1898. STOVIA merupakan sekolah untuk para calon dokter terbaik di Indonesia selama 75 tahun, sampai akhirnya ditutup pada tahun 1927. Setelah ditutupnya STOVIA, dibangun Sekolah Kedokteran beserta empat sekolah tinggi lain di beberapa kota di Pulau Jawa, yaitu Technische Hoogeschool te Bandoeng (Fakultas Teknik) di Bandung pada 1920, Recht Hoogeschool (Fakultas Hukum) di Batavia pada 1924, Faculteit der Letteren en Wijsbegeerte (Fakultas Sastra dan Kemanusiaan) di Batavia pada 1940, dan Faculteit van Landbouwweteschap (Fakultas Pertanian) di Bogor pada 1941. Melalui lima sekolah tinggi tersebut, dilahirkan sebuah universitas dengan nama Nood-universiteit (Universitas Darurat) pada tahun 1946. Pada tahun 1947 Nood-universiteit mengalami perubahan nama menjadi Universiteit van Indonesië. Kemudian berubah menjadi Universiteit Indonesia pada 1950. Universitas Indonesia memulai kegiatannya secara resmi dengan rektor pertamanya, yaitu Ir. R.M. Pandji Soerachman pada tanggal 2 Februari 1950. Saat itu Universitas Indonesia memiliki beberapa fakultas yang terbagi di beberapa daerah, yaitu Fakultas Kedokteran, Hukum, Sastra, dan Filsafat di Jakarta; Fakultas Teknik di Bandung; Fakultas Pertanian di Bogor; Fakultas Kedokteran Gigi di Surabaya; serta Fakultas Ekonomi di Makassar. Di tahun 1954-1963 fakultas-fakultas  Universitas Indonesia yang berada di luar Jakarta berkembang menjadi universitas. Inilah yang menjadi latar belakang berdirinya perguruan tinggi negeri di berbagai kota di Indonesia. Universitas Indonesia kini memiliki kampus utama yang dibangun pada tahun 1987 di bagian utara Depok, tepatnya di perbatasan antara wilayah Depok dan Jakarta Selatan. Sebelum dibangunnya kampus Depok tersebut, Universitas Indonesia memiliki tiga kampus yang berlokasi di Salemba, Pegangsaan Timur, dan Rawamangun. Kemudian kampus tersebut, kecuali kampus Salemba, pindah setelah kampus Depok yang berada di atas lahan seluas 320 hektare selesai dibangun. Kampus Salemba hingga saat ini masih tetap digunakan untuk Fakultas Kedokteran, Fakultas Kedokteran Gigi, dan Program Pascasarjana. Universitas Indonesia saat ini menaungi 13 Fakultas, Program Pascasarjana, dan Program Vokasi. UI menjadi salah satu universitas yang menjadi tujuan favorit para calon mahasiswa dan menjadi salah satu dari tiga perguruan tinggi terbaik di Indonesia, bersama dengan Universitas Gadjah Mada (UGM) dan Institut Teknologi Bandung (ITB). Sebagai salah satu kampus terbaik di Indonesia, UI terus berusaha mengembangkan kualitasnya dengan melakukan berbagai kerja sama dengan banyak perguruan tinggi ternama dunia dan beberapa asosiasi pendidikan dan riset.
                </p>
            </section>
            {{-- Sejarah end --}}
        </section>
        {{-- Section Information End --}}

       {{-- Fakultas Info Start --}}
        <section class="w-full max-h-min">
            <div class="border rounded-xl p-7 border-slate-950">
                <div class="flex flex-wrap gap-4">
                    @php
                        $Gradients = [
                            'bg-gradient-to-r from-blue-600 to-black',
                            'bg-gradient-to-r from-purple-600 to-black',
                            'bg-gradient-to-r from-teal-600 to-black'
                        ];
                    @endphp
                    @foreach ($faculties as $index => $faculty)
                        <div class="px-5 py-2 shadow-lg rounded-2xl shadow-slate-300 text-white {{ $Gradients[$index % count($Gradients)] }}">
                            {{ $faculty }}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Fakultas Info End --}}
    </div>
</x-layout>
