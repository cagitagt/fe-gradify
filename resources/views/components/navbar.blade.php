{{-- Section Navbar Start --}}
<nav class="fixed top-0 z-50  w-full bg-white shadow-lg shadow-[#4d2c5e6a]">
    <div class="py-4  w-[1000px] mx-auto ">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold"><a href="{{ url('/') }}">Gradify</a></h1>
            <div class="flex items-center gap-6 font-semibold">
                @if (Auth::check())
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                @else
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                @endif

                @if (Route::has('login'))
                    <div class="flex items-center gap-4 font-semibold">
                        @auth
                            <div class="relative">
                                <button onclick="toggleDropdown()" class="py-2 px-5 text-gray-900 text-base">Welcome,
                                    {{ Auth::user()->fullname }}</button>
                                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="{{ route('home') }}"
                                        class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Home</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</button>
                                    </form>
                                </div>
                            </div>
                            <script>
                                function toggleDropdown() {
                                    document.getElementById('dropdown').classList.toggle('hidden');
                                }
                            </script>
                        @else
                            <a href="{{ url('/login') }}"
                                class="bg-[#4D2C5E] py-2 px-5 rounded-full text-white text-base">Sign In</a>
                            <a href="{{ url('/register') }}"
                                class="bg-[#4D2C5E] py-2 px-5 rounded-full text-white text-base">Registration</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
{{-- Section Navbar End --}}
