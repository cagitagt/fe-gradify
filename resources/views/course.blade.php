<x-layout>
    <div class="w-[1000px] max-h-min   mx-auto mb-24 mt-28 ">
        {{-- Benner Start --}}
        <div class="z-10 w-full text-center mb-16 py-20 bg-gradient-to-l from-[#4D2C5E] to-[#4543c3] rounded-3xl ">
            <h1 class="text-5xl font-bold text-white">{{ $category->name }}</h1>
        </div>
        {{-- Benner Start --}}

        {{-- Information Start --}}
        <section class="mt-36">
            <div class="w-full my-14">
                @foreach ($courses as $course)
                    <div class="flex gap-5 my-10">
                        <div class="w-5 h-8 bg-[#4d2c5e]"></div>
                        <h1 class="text-xl font-bold text-[#4d2c5e]">{{ $course->name }}</h1>
                    </div>
                    <div class="flex justify-start gap-10">
                        @foreach ($course->lesson as $lesson)
                            <a
                                href="{{ route('lesson.index', ['slug' => $category->slug, 'course' => $course->name, 'lesson' => $lesson->name]) }}">
                                <div
                                    class="border border-[#4d2c5e] rounded-2xl p-5  w-40 h-32 items-center flex justify-center text-lg font-normal hover:bg-gradient-to-l from-[#4D2C5E] to-[#4543c3] hover:text-white hover:font-semibold hover:shadow-2xl hover:shadow-slate-500">
                                    {{ $lesson->name }}</div>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
        {{-- Information End --}}
    </div>
</x-layout>
