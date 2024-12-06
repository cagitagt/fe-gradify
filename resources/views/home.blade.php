<x-layout>
    <!-- Hero Section -->
    <section class="flex items-center min-h-screen py-16"
        style="background-image: linear-gradient(to right,rgba(103, 102, 219, 0.9),rgba(255, 219, 238, 0.5)), url('{{ asset('img/Group 327.png') }}')";
        background-size: cover; background-position: center;">
        <div class="container flex flex-col items-center mx-auto md:flex-row">
            <!-- Text Content -->
            <div class="text-center md:text-left md:w-1/2">
                <h1 class="text-5xl font-bold leading-tight text-gray-800 md:text-6xl">
                    The <span class="text-white">Smart Choice</span> For Future
                </h1>
                <p class="mt-6 text-lg text-gray-800">
                    Elearn is a global training provider based across the UK that specialises in accredited and bespoke
                    training courses. We crush the...
                </p>
            </div>

            <!-- Image -->
            <div class="flex justify-center mt-12 md:mt-0 md:w-1/2 ">
                <img src="/img/book.png" alt="Learning Illustration" class="w-[400px] h-auto">
            </div>
        </div>
    </section>

    <!-- To-Do List Section -->
    <section class="py-16">
        <div class="container flex flex-col items-center mx-auto md:flex-row">
            <!-- Kolom Gambar -->
            <div class="flex justify-center md:w-1/2 md:justify-start">
                <img src="img/piala.png" alt="Piala" class="w-[400px] md:w-[500px] h-auto">
            </div>
            <!-- Kolom Konten -->
            <div class="mt-8 md:w-1/2 md:mt-0">
                <!-- Judul -->
                <h2 class="mb-6 text-3xl font-bold text-center text-gray-800 md:text-center">
                    Countdown SNBT 2025
                </h2>
                <!-- Countdown Card -->
                <div class="flex items-center p-4 mb-6 bg-purple-200 rounded-lg">
                    <div class="flex items-center justify-center w-16 h-16 mr-4 bg-white rounded-md">
                        <img src="/img/calender.png" alt="Calendar" class="w-16 h-16">
                    </div>
                    <div class="flex-1">
                        <p class="text-lg font-semibold text-gray-800">UTBK</p>
                        <p class="text-sm text-gray-600">2025.04.05</p>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-gray-800">D-240</p>
                    </div>
                </div>
                <!-- Quote Card -->
                <div class="p-4 mb-6 bg-pink-200 rounded-lg">
                    <p class="font-sans text-lg font-normal text-center text-gray-500">
                        "Success is the sum of small efforts, repeated day in and day out." — Robert Collier
                    </p>
                </div>
                <!-- Task List -->
                <div class="p-6 bg-purple-100 rounded-lg">
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">Tugas Hari Ini</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="task1" name="task" class="mr-2">
                            <label for="task1" class="text-sm font-semibold text-gray-800">Mengerjakan Penalaran
                                Umum</label>
                            <span class="ml-auto text-sm text-gray-600">10:00 AM</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="task2" name="task" class="mr-2">
                            <label for="task2" class="text-sm font-semibold text-gray-800">Mengerjakan Penalaran
                                Matematika</label>
                            <span class="ml-auto text-sm text-gray-600">11:00 AM</span>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="task3" name="task" class="mr-2">
                            <label for="task3" class="text-sm font-semibold text-gray-800">Mengerjakan Literasi
                                Bahasa Indonesia</label>
                            <span class="ml-auto text-sm text-gray-600">01:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                @php
                    $Gradients = [
                        'bg-gradient-to-t from-purple-400 to-pink-400',
                        'bg-gradient-to-t from-blue-300 to-green-300',
                        'bg-gradient-to-t from-yellow-100 to-orange-300',
                        'bg-gradient-to-t from-blue-100 to-blue-800',
                        'bg-gradient-to-t from-blue-400 to-green-700',
                        'bg-gradient-to-t from-pink-500 to-yellow-200',
                        'bg-gradient-to-t from-blue-700 to-yellow-200',
                        'bg-gradient-to-t from-blue-950 to-purple-400',
                    ];
                @endphp
                @foreach ($categories as $index => $category)
                    <a href="{{ route('course.index', ['slug' => $category->slug]) }}">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                            <div
                                class="{{ $Gradients[$index % count($Gradients)] }} h-[160px] w-full flex justify-center items-center">
                                <img src="/img/PU.png" alt="Course Image"
                                    class="rounded-lg w-[160px] h-[160px] object-cover">
                            </div>
                            <div class="p-4 text-center font-['Roboto']">
                                <h3 class="mb-1 text-lg font-semibold text-gray-800">{{ $category->title }}</h3>
                                <p class="text-sm text-gray-600">{{ $category->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </section>

    <div class="fixed z-30 bottom-6 right-6">
        <button
            class="flex items-center px-4 py-3 font-bold text-white bg-purple-600 rounded-full shadow-lg hover:bg-purple-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            Komunitas
        </button>
    </div>

    <!-- Section: Next Lessons -->
    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Welcome back, ready for your next lesson?</h2>
                <a href="#" class="font-semibold text-purple-500 transition hover:text-purple-600">View
                    History</a>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img src="/img/lesson.png" alt="Lesson 1" class="object-cover w-full h-40">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                        <div class="mt-4">
                            <div class="w-full h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-purple-300 rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="mt-2 text-sm text-gray-600">Lesson 5 of 7</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img src="/img/lesson.png" alt="Lesson 2" class="object-cover w-full h-40">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                        <div class="mt-4">
                            <div class="w-full h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-purple-300 rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="mt-2 text-sm text-gray-600">Lesson 5 of 7</p>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img src="/img/lesson.png" alt="Lesson 3" class="object-cover w-full h-40">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                        <div class="mt-4">
                            <div class="w-full h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-purple-300 rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="mt-2 text-sm text-gray-600">Lesson 5 of 7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Universitas Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center mb-8">
                <h2 class="mb-1 text-2xl font-bold text-gray-800">Info Universitas</h2>
                <p class="mt-4 text-sm text-gray-600">Cari Tahu Universitas impianmu!!</p>
            </div>
            <!-- Kontainer Scroll -->
            <div class="flex gap-6 pb-4 overflow-x-scroll justify-center">
                <div class="flex gap-6">
                    @foreach ($universitas as $univ)
                        <a href="{{ route('info.univ', ['slug' => $univ->slug]) }}">
                            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                                <div
                                    class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-purple-500 rounded-b-[10px] z-0">
                                </div>
                                <img class="w-[80px] h-[90px] mx-auto mt-2 relative z-10" src="{{ $univ->logo }}"
                                    alt="Logo Undip" />
                                <div
                                    class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                                    {{ $univ->name }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container relative mx-auto">
            <div
                class="bg-gradient-to-r from-[#66c7f4] to-[#39a5d6] py-8 px-8 flex items-center justify-between rounded-md shadow-lg relative max-w-5xl mx-auto z-10">
                <div class="flex items-center max-w-lg space-x-4 text-white">
                    <img class="w-20 h-20 rounded-full"
                        src="https://roboguru-forum-cdn.ruangguru.com/image/9a73701a-ce24-42e5-9bf4-a329fcd0c7dc.png"
                        alt="Icon Konsultan" />
                    <div>
                        <p class="text-sm font-medium">Masih punya pertanyaan?</p>
                        <h2 class="text-lg font-bold">Tanyakan via chat ke Konsultan Pendidikan</h2>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden z-[-1]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full">
                        <path fill="rgba(255, 255, 255, 0.5)"
                            d="M0,256L48,245.3C96,235,192,213,288,192C384,171,480,149,576,144C672,139,768,149,864,160C960,171,1056,181,1152,192C1248,203,1344,213,1392,218.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                        </path>
                    </svg>
                </div>
                <a href="https://wa.me/085742668675"
                    class="flex items-center bg-white text-[#39a5d6] font-semibold py-2 px-4 rounded-full shadow hover:bg-gray-100 transition"
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 8c0-2.21-1.79-4-4-4H9c-2.21 0-4 1.79-4 4v8c0 1.33 1.34 2 2 2h1v3l3-3h4c1.66 0 3-1.34 3-3V8z" />
                    </svg>
                    Chat Konsultan
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-800">What Student's Say</h2>
            <div class="relative mt-8">
                <!-- Scrollable container for testimonials -->
                <div class="flex gap-8 pb-4 overflow-x-auto">
                    <!-- Testimonial Box -->
                    <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                        <p class="text-gray-600">"Teachings of the great explore of truth, the master-builder of human
                            happiness."</p>
                        <div class="absolute flex items-center gap-4 bottom-4 left-4">
                            <img src="https://i.pinimg.com/736x/9c/d6/92/9cd692e6c8c5d962da3bc9968871bf4d.jpg"
                                alt="Profile" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold text-gray-800">Theo</h4>
                                <p class="text-sm text-gray-500">Universitas Indonesia - Teknik Informatika</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                        <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                        <div class="absolute flex items-center gap-4 bottom-4 left-4">
                            <img src="https://i.pinimg.com/736x/66/9a/d5/669ad54362468eddf89b272da2e10330.jpg"
                                alt="Profile" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold text-gray-800">Mark Darius</h4>
                                <p class="text-sm text-gray-500">Universitas Indonesia - Teknik Mesin</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                        <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                        <div class="absolute flex items-center gap-4 bottom-4 left-4">
                            <img src="https://i.pinimg.com/736x/5a/7f/80/5a7f80b6370e19396acbbe165bc74673.jpg"
                                alt="Profile" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold text-gray-800">Johan Andreas</h4>
                                <p class="text-sm text-gray-500">Universitas Indonesia - Hukum</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                        <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                        <div class="absolute flex items-center gap-4 bottom-4 left-4">
                            <img src="https://i.pinimg.com/736x/ff/63/54/ff6354f56cf04b46a3d61ea05ce4d3d8.jpg"
                                alt="Profile" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold text-gray-800">Hendrian Sutama</h4>
                                <p class="text-sm text-gray-500">ITB - Teknik Lingkungan</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                        <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                        <div class="absolute flex items-center gap-4 bottom-4 left-4">
                            <img src="https://i.pinimg.com/736x/cc/99/8d/cc998d623349f4c4f3579ced8aab7b27.jpg"
                                alt="Profile" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold text-gray-800">Jeanna Syawalia</h4>
                                <p class="text-sm text-gray-500">Universitas Indonesia - Administrasi Bisnis</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                        <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                        <div class="absolute flex items-center gap-4 bottom-4 left-4">
                            <img src="https://i.pinimg.com/736x/a5/34/d0/a534d08e8c5a6cd97203b34cd66b7d85.jpg"
                                alt="Profile" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold text-gray-800">Jovan</h4>
                                <p class="text-sm text-gray-500">Universitas Indonesia - Manajemen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Scrollbar -->
                <div class="absolute top-0 right-0 w-12 h-full bg-gradient-to-l from-gray-100"></div>
            </div>
        </div>
    </section>

</x-layout>

<script>
    let testimonialsContainer = document.querySelector('.overflow-x-auto');
    let scrollAmount = 0;

    function autoScroll() {
        if (scrollAmount < testimonialsContainer.scrollWidth - testimonialsContainer.clientWidth) {
            scrollAmount += 2;
            testimonialsContainer.scrollTo(scrollAmount, 0);
        } else {
            scrollAmount = 0;
        }
    }

    setInterval(autoScroll, 30); // Adjust the speed of scrolling by changing the interval
</script>
