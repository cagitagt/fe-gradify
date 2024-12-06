<x-layout>
    {{-- Section IMG Start --}}
    <div class="mt-16 relative w-full bg-black h-[420px]">
        <img src="{{ $universitas->cover_image }}" alt="" class="absolute object-cover w-full h-full z-3">

        <div class="absolute bottom-0 w-full h-36 bg-gradient-to-t from-white z-4 "></div>
    </div>
    {{-- Section IMG End --}}


    <div class="my-20 max-h-min  w-[1000px] mx-auto ">
        {{-- Section Information Start --}}
        <section class="w-full mb-40">
            <h1 class="mb-1 text-6xl font-bold">{{ $universitas->name }}</h1>
            <p class="mb-16">{{ $universitas->address }}</p>
            <div class="border rounded-lg border-slate-950 ">
                <div class="flex gap-2 py-3">
                    <div class="w-[400px]">
                        <div class="p-5 ">
                            <div class="flex flex-wrap gap-4 text-white">
                                <div class="px-4 py-1 bg-blue-700 rounded-xl ">Status: {{ $universitas->status_univ }}
                                </div>
                                <div class="px-4 py-1 bg-violet-600 rounded-xl ">Akreditasi:
                                    {{ $universitas->akreditasi }}</div>
                                <div class="px-4 py-1 bg-yellow-500 rounded-xl ">Website: {{ $universitas->website }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[400px]">
                        <div class="p-5">
                            <h1 class="text-lg font-bold ">Biaya Kuliah</h1>
                            <p class="mb-2">{{ $universitas->biaya_kuliah }} per Semester</p>
                            <h1 class="text-lg font-bold ">Lokasi</h1>
                            <p>{{ $universitas->address }}</p>
                        </div>
                    </div>
                    <div class="w-[200px] m-auto">
                        <img src="{{ $universitas->logo }}" alt="logo-univ" class="w-32 mx-auto">
                    </div>
                </div>
            </div>


            {{-- Sejarah start --}}
            <section class="my-20">
                <h1 class="mb-5 text-4xl font-bold">Sejarah</h1>
                <p class="text-justify">
                    {{ $universitas->sejarah }}
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
                            'bg-gradient-to-r from-teal-600 to-black',
                        ];
                    @endphp
                    @foreach ($faculties as $index => $faculty)
                        <div
                            class="px-5 py-2 shadow-lg rounded-2xl shadow-slate-300 text-white {{ $Gradients[$index % count($Gradients)] }}">
                            {{ $faculty }}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Fakultas Info End --}}
    </div>
</x-layout>
