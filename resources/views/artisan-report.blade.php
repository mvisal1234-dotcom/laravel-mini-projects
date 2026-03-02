<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Commands Report | Mini Project 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-2xl shadow-2xl overflow-hidden mb-10">
            <div class="px-8 py-16 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Artisan Commands Report</h1>
                <p class="text-xl md:text-2xl opacity-90">Mini Project 3 – Exploring Laravel Artisan CLI</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 space-y-10">
            <p class="text-lg text-gray-700 leading-relaxed mb-8">
                I practiced several <code>php artisan make:</code> commands to quickly generate Laravel components.
                Here is what I created, where the files are saved, and why each command is useful.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- 1. Controller -->
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-indigo-800 mb-3">php artisan make:controller ExampleController</h3>
                    <p class="font-medium text-gray-700 mb-2">File created:</p>
                    <code class="block bg-white p-3 rounded mb-3 text-sm">app/Http/Controllers/ExampleController.php</code>
                    <p class="text-gray-600">
                        Purpose: Creates a new controller file where you define methods to handle web requests (index, store, show, etc.).
                    </p>
                </div>

                <!-- 2. Model + Migration -->
                <div class="bg-purple-50 border-l-4 border-purple-500 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-purple-800 mb-3">php artisan make:model Product -m</h3>
                    <p class="font-medium text-gray-700 mb-2">Files created:</p>
                    <code class="block bg-white p-3 rounded mb-1 text-sm">app/Models/Product.php</code>
                    <code class="block bg-white p-3 rounded text-sm">database/migrations/..._create_products_table.php</code>
                    <p class="text-gray-600 mt-3">
                        Purpose: Generates an Eloquent model + migration file to create the matching database table.
                    </p>
                </div>

                <!-- 3. Request -->
                <div class="bg-pink-50 border-l-4 border-pink-500 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-pink-800 mb-3">php artisan make:request UpdateProductRequest</h3>
                    <p class="font-medium text-gray-700 mb-2">File created:</p>
                    <code class="block bg-white p-3 rounded text-sm">app/Http/Requests/UpdateProductRequest.php</code>
                    <p class="text-gray-600 mt-3">
                        Purpose: Creates a form request class used for validating and authorizing form data before it reaches the controller.
                    </p>
                </div>

                <!-- 4. Seeder -->
                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-xl">
                    <h3 class="text-xl font-bold text-indigo-800 mb-3">php artisan make:seeder SampleSeeder</h3>
                    <p class="font-medium text-gray-700 mb-2">File created:</p>
                    <code class="block bg-white p-3 rounded text-sm">database/seeders/SampleSeeder.php</code>
                    <p class="text-gray-600 mt-3">
                        Purpose: Generates a seeder class that can insert test/fake data into your database when you run <code>php artisan db:seed</code>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-12">
            <a href="/" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-10 py-4 rounded-xl shadow-lg transition">
                ← Back to Home
            </a>
            <p class="mt-6 text-gray-600 text-sm">
                Mini Project 3 • Chham Ratanak • Laravel Mini Projects • March 2026
            </p>
        </div>
    </div>
</body>
</html>