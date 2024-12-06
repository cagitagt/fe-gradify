<x-layout>
    <div class="z-10 w-full mt-16 text-center py-7 ">
        <h1 class="text-3xl font-bold text-[#4D2C5E]">{{ $course->name }}</h1>
        <p class="text-lg text-slate-500">-- {{ $lesson->name }} --</p>
    </div>

    <div class="w-[1000px] max-h-min  mt-5 mx-auto mb-20">
        {{-- Video Start --}}
        <div class="w-full border-4 shadow-sm rounded-2xl">
            <iframe src="{{ $lesson->video_url }}" class="w-full h-[500px] rounded-2xl"></iframe>
        </div>
        {{-- Video End --}}


        {{-- Information Start --}}
        <section class="mt-20">
            <div class="border border-[#4d2c5e6a] rounded-2xl ">
                <p class="p-6 text-justify">
                    {{ $lesson->content }}
                </p>
            </div>
        </section>
        {{-- Information End --}}
    </div>
</x-layout>
