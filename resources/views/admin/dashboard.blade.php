<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradify Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Container -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="bg-[#635DAA] w-64 p-6 text-white">
            <h1 class="text-3xl font-bold mb-6">Gradify</h1>
            <ul class="space-y-4">
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-300">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a></li>
                <li><a href="/admin/materi" class="flex items-center space-x-2 hover:text-blue-300">
                        <i class="fas fa-book"></i>
                        <span>Materi</span>
                    </a></li>
                <li><a href="/todolist" class="flex items-center space-x-2 hover:text-blue-300">
                        <i class="fas fa-list-check"></i>
                        <span>To-Do List</span>
                    </a></li>
                <li><a href="/universitas" class="flex items-center space-x-2 hover:text-blue-300">
                        <i class="fas fa-university"></i>
                        <span>Info Universitas</span>
                    </a></li>
                <li><a href="/quotes" class="flex items-center space-x-2 hover:text-blue-300">
                        <i class="fas fa-quote-left"></i>
                        <span>Quotes</span>
                    </a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <!-- Dashboard Section -->
            <section class="mb-10">
                <h1 class="text-3xl font-bold text-gray-800">Welcome to Gradify</h1>
                <p class="text-gray-600 mt-2">Manage your learning and activities here.</p>
            </section>

            <!-- Features -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Materi -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800">Materi</h2>
                    <p class="text-gray-600 mt-2">Explore learning materials for your courses.</p>
                    <div class="mt-4 space-y-4">
                        <button
                            class="w-full py-2 px-4 bg-[#635DAA] text-white rounded-md hover:bg-[#514b93]">Start Learning</button>
                    </div>
                </div>

                <!-- To-Do List -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800">To-Do List</h2>
                    <p class="text-gray-600 mt-2">Keep track of your tasks and deadlines.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center">
                            <input type="checkbox" id="task1" class="mr-2">
                            <label for="task1" class="text-gray-800">Complete Assignment</label>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" id="task2" class="mr-2">
                            <label for="task2" class="text-gray-800">Review Lecture Notes</label>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" id="task3" class="mr-2">
                            <label for="task3" class="text-gray-800">Prepare for Exam</label>
                        </li>
                    </ul>
                </div>

                <!-- Info Universitas -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800">Info Universitas</h2>
                    <p class="text-gray-600 mt-2">Get the latest updates from your university.</p>
                    <div class="bg-gray-100 p-4 rounded-lg mt-4">
                        <h3 class="font-semibold text-gray-800">Semester Updates</h3>
                        <p class="text-gray-600">New semester starts on January 5, 2025.</p>
                    </div>
                </div>

                <!-- Quotes -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800">Quotes</h2>
                    <p class="text-gray-600 mt-2">Get inspired by motivational quotes.</p>
                    <div class="bg-gray-100 p-4 rounded-lg mt-4">
                        <p class="text-gray-800 italic">"The future belongs to those who believe in the beauty of their
                            dreams." - Eleanor Roosevelt</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>
