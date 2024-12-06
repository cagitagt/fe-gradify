<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Section Navbar Start --}}
    <x-navbar></x-navbar>
    {{-- Section Navbar End --}}

    {{-- benner Start --}}
    <section>
        <div class=" relative w-full flex justify-center items-center h-[550px] bg-gradient-to-l from-[#ffdaed] to-[#6766db]"
            style="url('{{ asset('img/Group 327.png') }}')";>
            <div class=" absolute flex justify-between w-[900px] h-[450px] ">
                <div class="my-auto w-[420px]">
                    <h1 class="text-5xl font-bold text-white">Make Your Better Future Here!</h1>
                </div>
                <div class="my-auto">
                    <img src="/img/dash-main.png" class="w-[330px]">
                </div>
            </div>
            <img src="/img/wave.png" alt="wafe" class="absolute bottom-0 w-full ">
        </div>
    </section>
    {{-- benner end --}}


    <div class="w-[1000px] my-40  mx-auto max-h-min ">
        {{-- keunggulan Start --}}
        <section class="my-10">
            <div class="w-full p-6 shadow-2xl  shadow-[#4d2c5ea6] rounded-xl grid grid-cols-4">
                <div class="p-4">
                    <img src="/img/dash-benner1.png" alt="" class="w-24 ">
                    <h1 class="text-3xl font-extrabold text-[#4d2c5e]">1 JUTA+</h1>
                    <H3 class="text-lg font-semibold text-[#4d2c5ec0] ">Pelajar Indonesia</H3>
                    <p class="text-sm ">yang sudah menjadi bagian dari Gradify</p>
                </div>
                <div class="p-4">
                    <img src="/img/dash-benner2.png" alt="" class="w-24 ">
                    <h1 class="text-3xl font-extrabold text-[#4d2c5e]">20.000+</h1>
                    <H3 class="text-lg font-semibold text-[#4d2c5ec0] ">Jumlah Konten</H3>
                    <p class="text-sm ">pembelajaran terbaru dan sesuai kurikulum</p>
                </div>
                <div class="p-4">
                    <img src="/img/dash-benner3.png" alt="" class="w-24 ">
                    <h1 class="text-3xl font-extrabold text-[#4d2c5e]">8/10</h1>
                    <H3 class="text-lg font-semibold text-[#4d2c5ec0] ">Peserta</H3>
                    <p class="text-sm ">terbukti lolos PTN impian</p>
                </div>
                <div class="p-4">
                    <img src="/img/dash-benner4.png" alt="" class="w-24 ">
                    <h1 class="text-3xl font-extrabold text-[#4d2c5e]">96%</h1>
                    <H3 class="text-lg font-semibold text-[#4d2c5ec0] ">Pelajar</H3>
                    <p class="text-sm ">merasa terbantu dengan Video Belajar</p>
                </div>
            </div>
        </section>
        {{-- keunggulan End --}}

        {{-- Paket Pembelian Start --}}
        <section class="my-48 ">
            <div class="w-full max-h-min ">
                <h1 class="w-full mb-2 text-4xl font-bold text-center text-[#4d2c5e]">-- Membership --</h1>
                <p class="mb-16 italic text-center text-slate-700">Start Your Journey With Us!</p>
                <div class="flex justify-center gap-5 px-14">
                    <div class="p-5 rounded-lg shadow-lg w-72 shadow-gray-300 text-[#4d2c5e]">
                        <h1 class="mt-6 mb-1 text-xl font-bold text-center">Prime UTBK (2 Bulan)</h1>
                        <h3 class="my-6 text-2xl italic font-bold text-red-600 ">Rp. 30.000</h3>
                        <p class="text-sm text-justify ">Siapin UTBK dari sekarang sampai nanti hari terakhir UTBK
                            dengan Materi Belajar Lengkap! Dapatkan akses rangkuman dan voucher buku murah di Gramedia
                            terdekat sebanyak (5 buah)!</p>
                        <div class="my-7">
                            <div class="flex items-center mb-3">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">Periode Penggunaan 6 bulan</p>
                            </div>
                            <div class="flex items-center mb-3">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">voucher buku murah di Gramedia <span
                                        class="font-bold text-yellow-600 ">(5 buah)</span></p>
                            </div>
                            <div class="flex items-center">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">Materi belajar lengkap dengan Video Belajar dan Rangkuman</p>
                            </div>
                        </div>
                        <a href="{{ route('membership') }}">
                            <div
                                class="w-full py-2 font-bold text-center text-white bg-[#6766db] rounded-full hover:bg-blue-900 ">
                                Beli</div>
                        </a>
                    </div>
                    <div class="p-5 rounded-lg shadow-lg w-72 shadow-gray-300 text-[#4d2c5e]">
                        <h1 class="mt-6 mb-1 text-xl font-bold text-center">Prime UTBK (5 Bulan)</h1>
                        <h3 class="my-6 text-2xl italic font-bold text-red-600 ">Rp. 50.000</h3>
                        <p class="text-sm text-justify ">Siapin UTBK dari sekarang sampai nanti hari terakhir UTBK
                            dengan Materi Belajar Lengkap! Dapatkan akses rangkuman dan voucher buku murah di Gramedia
                            terdekat sebanyak (10 buah)!</p>
                        <div class="my-7">
                            <div class="flex items-center mb-3">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">Periode Penggunaan 6 bulan</p>
                            </div>
                            <div class="flex items-center mb-3">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">voucher buku murah di Gramedia <span
                                        class="font-bold text-yellow-600 ">(10 buah)</span></p>
                            </div>
                            <div class="flex items-center">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">Materi belajar lengkap dengan Video Belajar dan Rangkuman</p>
                            </div>
                        </div>
                        <a href="{{ route('membership') }}">
                            <div
                                class="w-full py-2 font-bold text-center text-white bg-[#6766db] rounded-full hover:bg-blue-900">
                                Beli</div>
                        </a>
                    </div>
                    <div class="p-5 rounded-lg shadow-lg w-72 shadow-gray-300 text-[#4d2c5e]">
                        <h1 class="mt-6 mb-1 text-xl font-bold text-center">Prime UTBK (1 Tahun)</h1>
                        <h3 class="my-6 text-2xl italic font-bold text-red-600 ">Rp. 75.000</h3>
                        <p class="text-sm text-justify ">Siapin UTBK dari sekarang sampai nanti hari terakhir UTBK
                            dengan Materi Belajar Lengkap! Dapatkan akses rangkuman dan voucher buku murah di Gramedia
                            terdekat sebanyak (20 buah)!</p>
                        <div class="my-7">
                            <div class="flex items-center mb-3">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">Periode Penggunaan 6 bulan</p>
                            </div>
                            <div class="flex items-center mb-3">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">voucher buku murah di Gramedia <span
                                        class="font-bold text-yellow-600 ">(20 buah)</span></p>
                            </div>
                            <div class="flex items-center">
                                <img src="/aset/check.svg" alt="" class="mr-4">
                                <p class="text-sm">Materi belajar lengkap dengan Video Belajar dan Rangkuman</p>
                            </div>
                        </div>
                        <a href="{{ route('membership') }}">
                            <div
                                class="w-full py-2 font-bold text-center text-white bg-[#6766db] rounded-full hover:bg-blue-900">
                                Beli</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- Paket Pembelian Start --}}

        {{-- Pengalaman Pengguna Start --}}
        <section class="my-16">
            <div class="w-full pb-12 pt-11 bg-gradient-to-r from-purple-400 to-purple-900 max-h-max rounded-3xl">
                <h1 class="text-3xl font-bold text-center text-white mb-7">-- Pengalaman Pengguna Gradify --</h1>
                <div class="flex justify-center gap-5">

                    <div class="relative p-4 bg-white w-72 rounded-xl h-60">
                        <p class="mb-6 text-xs text-justify ">Nyesel gak belajar pake Gradify dari dulu awal masuk SMA!
                            Terimakasih ify, berkat ilmu ilmu nya aku bisa masuk di jurusan yang aku impikan! Belajar
                            pake Gradify bisa dimana aja dan kapan saja, tentu jauh lebih praktis dan efisien. Thanks
                            Gradify</p>
                        <div class="absolute bottom-0 flex justify-between p-4">
                            <img src="/img/user1.jpg" alt="" class="object-cover rounded-full mr-7 w-14">
                            <div>
                                <h1 class="text-sm font-bold">Ikhlasul Amalia Aldila</h1>
                                <p class="text-xs ">Kedokteran - Universitas Brawijaya</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white w-72 rounded-xl h-60 ">
                        <p class="mb-6 text-xs text-justify ">Konsep belajar dari Zenius emang efektif banget! Sekali
                            belajar, bisa langsung nyerep. Walaupun belum ngerti pun, bisa kita ulang berkali2 dimana
                            aja, kapan aja selagi kita punya koneksi internet. Bener bener ngebantu lah. Thanks Zenius!
                        </p>
                        <div class="absolute bottom-0 flex justify-between p-4">
                            <img src="/img/user2.jpg" alt="" class="object-cover rounded-full mr-7 w-14">
                            <div class="bottom-0 ">
                                <h1 class="text-sm font-bold">Leila Dhalia</h1>
                                <p class="text-xs ">Teknik Informatika - Institut Teknologi Bandung</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white h-60 w-72 rounded-xl ">
                        <p class="mb-6 text-xs text-justify ">I’m so in love with Gradify! Materi di ify keren2
                            parahhh. Gradify benar2 ngebantu aku banget selama persiapan menghadapi sbmptn. Kalau
                            ditanya apa rahasia aku bisa kuliah sambil persiapan sbmptn kuncinya adalah “Gradify”❤️
                            Thankyou Gradify, udah ngebantu aku memahami materi2 soshum dengan cepat karena bener2
                            diajarin dari basic banget🤩🤩"</p>
                        <div class="absolute bottom-0 flex justify-between p-4">
                            <img src="/img/user3.jpg" alt="" class="object-cover rounded-full mr-7 w-14">
                            <div>
                                <h1 class="text-sm font-bold">Nicholas Saputra</h1>
                                <p class="text-xs ">Arsitektur - Universitas Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Pengalaman Pengguna End --}}
    </div>

    {{-- Asking Start --}}
    <section class="w-full ">
        <div class="w-full py-20 bg-gradient-to-l from-[#ffdaed] to-[#6766db] flex flex-col items-center">
            <h1 class="mb-8 text-2xl font-bold text-center text-white md:text-3xl">-- Most Frequently Asked Questions
                --</h1>
            <div class="w-[800px]  space-y-4 ">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFaq(1)"
                        class="flex items-center justify-between w-full px-4 py-3 font-medium text-left text-black">
                        Apa yang dimaksud dengan aplikasi belajar online?
                        <svg id="icon-1" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-1" class="hidden px-4 pb-3 text-sm text-gray-600">
                        Aplikasi belajar online adalah sebuah layanan yang menawarkan solusi belajar secara daring bagi
                        siswa. Umumnya, aplikasi belajar online ini disediakan oleh penyedia layanan aplikasi bimbel.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFaq(2)"
                        class="flex items-center justify-between w-full px-4 py-3 font-medium text-left text-black">
                        Bagaimana efektivitas penggunaan aplikasi pembelajaran online di Indonesia?
                        <svg id="icon-2" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-2" class="hidden px-4 pb-3 text-sm text-gray-600">
                        Penggunaan aplikasi pembelajaran online di Indonesia cukup efektif, terutama bagi siswa yang
                        memiliki akses ke perangkat dan internet. Aplikasi ini mempermudah siswa untuk belajar kapan
                        saja dan di mana saja.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFaq(3)"
                        class="flex items-center justify-between w-full px-4 py-3 font-medium text-left text-black">
                        Apa yang dimaksud dengan bimbel?
                        <svg id="icon-3" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-3" class="hidden px-4 pb-3 text-sm text-gray-600">
                        Bimbel adalah kegiatan dalam pembelajaran yang bersifat tambahan dengan tujuan menambah
                        intensitas belajar. Dengan kamu mengikuti bimbel, diharapkan bisa meningkatkan pemahaman serta
                        prestasi belajar.

                        Seiring perkembangan zaman, kini mulai bermunculan bimbel online yang menawarkan layanan
                        aplikasi belajar online yang hadir di Indonesia. Dengan adanya beragam penyedia layanan aplikasi
                        belajar online tersebut, diharapkan bisa memudahkan para siswa dalam mencapai tujuan belajar.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button onclick="toggleFaq(4)"
                        class="flex items-center justify-between w-full px-4 py-3 font-medium text-left text-black">
                        Apa saja kendala yang dihadapi siswa saat belajar untuk persiapan UTBK?
                        <svg id="icon-4" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-4" class="hidden px-4 pb-3 text-sm text-gray-600">
                        Siswa sering menghadapi berbagai kendala saat mempersiapkan UTBK, seperti kesulitan mengatur
                        waktu antara belajar dan aktivitas lain, kurangnya akses ke materi dan latihan soal yang
                        berkualitas, serta sulitnya memahami konsep tertentu, terutama pada pelajaran eksakta. Selain
                        itu, tekanan psikologis, seperti rasa cemas dan kehilangan motivasi, juga menjadi tantangan,
                        ditambah kendala teknis seperti keterbatasan akses internet atau perangkat belajar yang kurang
                        memadai.
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Asking End --}}

    <x-footbar></x-footbar>
</body>

</html>
<script>
    function toggleFaq(id) {
        const faq = document.getElementById(`faq-${id}`);
        const icon = document.getElementById(`icon-${id}`);
        faq.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
</script>
