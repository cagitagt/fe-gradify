<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <style>
        /* Custom Styles for Tabs */
        .tab-button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            font-size: 15px;
            font-weight: bold;
            color: white;
            border-radius: 9999px;
            text-align: center;
            transition: all 0.2s ease-in-out;
            flex-grow: 1; /* Membuat tombol memanjang */
        }

        .tab-button.active {
            background-color: #5a4dbf; /* Active tab background */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        .tab-button.inactive {
            background-color: transparent;
        }

        .tab-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding: 5px;
            background: linear-gradient(to right, #736fdc, #635caa);
            border-radius: 9999px;
            width: 100%; /* Membuat tab mengambil seluruh lebar */
        }

        .circle {
        position: relative;
        width: 500px; /* Ukuran lingkaran */
        height: 500px; /* Ukuran lingkaran */
        background-color: #635caa;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .circle img {
        width: 110%; /* Gambar lebih besar dari lingkaran */
        height: 110%; /* Gambar lebih besar dari lingkaran */
        object-fit: contain;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-[#736fdc] to-[#ebcbeb]">

    <!-- Main Container -->
    <div class="flex flex-cols-2 gap-10  items-center  w-[1000px] mx-auto">
        
        <!-- Illustration Section -->
        <div class="relative flex items-center justify-center w-full lg:w-1/2">
            <!-- Background Circle -->
            <div class="circle">
                <img src="/img/login.png" alt="User Login">
            </div>
        </div>

        <!-- Form Section -->
        <div class="w-full  bg-white rounded-2xl shadow-lg p-10 h-[500px] flex flex-col justify-between">
            <!-- Title -->
            <div>
                <h1 class="mb-2 text-2xl font-bold text-center text-gray-800 ">
                    Selamat Datang Kembali!
                </h1>
                <p class="mb-2 text-sm text-center text-gray-600">
                    Masuk untuk melanjutkan dan raih mimpi Anda bersama kami!
                </p>
            </div>

            <!-- Form Fields -->
            <div>
                <!-- Tabs -->
                <div class="flex justify-center mb-4"> <!-- Tambahkan margin bawah -->
                    <div class="tab-container">
                        <button class="tab-button active" id="login-tab" onclick="switchTab('login')">Login</button>
                        <button class="tab-button inactive" id="register-tab" onclick="switchTab('register')">Daftar</button>
                    </div>
                </div>

                <!-- Email Address -->
                <div class="mb-2">
                    <label for="email" class="block text-sm font-medium text-gray-700 ">Alamat Email</label>
                    <input type="email" id="email" placeholder="Masukkan Alamat Email Anda"
                        class="w-full mt-2 px-4 py-2 rounded-full border border-[#8880df] text-gray-600 focus:outline-none text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-2">
                    <label for="password" class="block text-sm font-medium text-gray-700 ">Kata Sandi</label>
                    <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda"
                        class="w-full mt-2 px-4 py-2 rounded-full border border-[#8880df] text-gray-600 focus:outline-none text-sm" />
                </div>
                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-12">
                    <div class="flex items-center">
                        <input id="remember-me" type="checkbox" class="h-4 w-4 text-[#8880df] focus:ring-[#8880df] border-gray-300 rounded">
                        <label for="remember-me" class="block ml-2 text-sm text-gray-600">
                            Ingat Saya
                        </label>
                    </div>
                    <div>
                        <a href="#" class="text-sm text-[#8880df] hover:underline">
                            Lupa Kata Sandi?
                        </a>
                    </div>
                </div>
                <!-- Login Button -->
                <div>
                    <button class="w-full py-3 bg-[#8880df] text-white rounded-3xl text-sm lg:text-base font-medium hover:bg-[#736fdc] transition">
                        Login
                    </button> <!-- ke arah home-->
                </div>
            </div>
        </div>

    <script>
        // JavaScript for Switching Tabs
        function switchTab(tab) {
            const loginTab = document.getElementById("login-tab");
            const registerTab = document.getElementById("register-tab");

            if (tab === "login") {
                loginTab.classList.add("active");
                loginTab.classList.remove("inactive");
                registerTab.classList.add("inactive");
                registerTab.classList.remove("active");
            } else if (tab === "register") {
                registerTab.classList.add("active");
                registerTab.classList.remove("inactive");
                loginTab.classList.add("inactive");
                loginTab.classList.remove("active");
            }
        }
    </script>
</body>
</html>
