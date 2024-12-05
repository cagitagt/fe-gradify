<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<div class="flex items-center justify-center min-h-screen" style="background: linear-gradient(to right, #736fdc, #ebcbeb);">
    <div class="bg-white rounded-3xl  shadow-lg h-[495px] flex w-[800px] relative">
        <!-- Bagian Gambar -->
        <div class=" flex items-center justify-center w-[350px] rounded-l-3xl bg-purpleLight bg-[#C5AEE7]">
            <img src="/img/form.png" alt="Form Illustration" class="w-[470px] absolute ">
        </div>

        <!-- Bagian Form -->
        <div class="w-1/2 py-5 pl-16">         
            <h2 class="text-3xl mt-4 font-bold text-center text-[#8880DF]">Registration</h2>
            <form action="/register" method= "POST" class="mt-5 space-y-2 ">
                @csrf
                <!-- Input Nama Lengkap -->
                <div>
                    <label for="fullname" class="text-xs font-medium text-black ">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="w-full px-4 py-2 text-xs border rounded-2xl border-[#8880DF] focus:outline-none focus:ring-1 " placeholder="Enter your name" required>
                </div>

                <!-- Input Password -->
                <div>
                    <label for="password" class="text-xs font-medium text-black ">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 text-xs border rounded-2xl border-[#8880DF] focus:outline-none focus:ring-1" placeholder="Enter your password" required>
                </div>

                <!-- Input Nomor Telepon -->
                <div>
                    <label for="phone" class="text-xs font-medium text-black ">No Telephone</label>
                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 text-xs border rounded-2xl border-[#8880DF] focus:outline-none focus:ring-1" placeholder="Enter your phone number" required>
                </div>

                <!-- Input Alamat -->
                <div>
                    <label for="address" class="text-xs font-medium text-black ">Alamat</label>
                    <input type="text" id="address" name="address" class="w-full px-4 py-2 text-xs border rounded-2xl border-[#8880DF] focus:outline-none focus:ring-1" placeholder="Enter your address" required>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-8">
                    <button type="submit" class="w-full py-2 text-white  rounded-full bg-[#8880DF] ">Sign Up</button>  <!-- ke arah home-->
                </div>
            </form>
        </div>
    </div>
</div>
</html>
