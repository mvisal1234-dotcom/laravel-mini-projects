<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Folder Structure Explorer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen py-12 px-4">
    <div class="max-w-5xl mx-auto bg-white shadow-2xl rounded-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-indigo-600 text-white py-10 px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">Laravel Core Folders Explained</h1>
            <p class="text-xl opacity-90">Mini Project 1 - Understanding Laravel Architecture</p>
        </div>

        <!-- Content -->
        <div class="p-8 md:p-12 space-y-12">
            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">app/</h2>
                <p class="text-gray-700 mb-4">Core application code (controllers, models, etc.)</p>
                <ul class="list-disc pl-6 space-y-1 text-gray-600">
                    <li>Http/Controllers/ → Request handling</li>
                    <li>Models/ → Database models</li>
                    <li>Providers/ → Service registration</li>
                </ul>
            </section>

            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">routes/</h2>
                <p class="text-gray-700 mb-4">Where you define URLs and their actions</p>
                <ul class="list-disc pl-6 space-y-1 text-gray-600">
                    <li>web.php → Web routes (sessions, CSRF)</li>
                    <li>api.php → API routes</li>
                </ul>
            </section>

            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">resources/</h2>
                <p class="text-gray-700 mb-4">Frontend files (views, CSS, JS)</p>
                <ul class="list-disc pl-6 space-y-1 text-gray-600">
                    <li>views/ → Blade templates</li>
                    <li>css/, js/ → Source assets (Vite compiles them)</li>
                </ul>
            </section>

            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">public/</h2>
                <p class="text-gray-700 mb-4">Browser-accessible files</p>
                <ul class="list-disc pl-6 space-y-1 text-gray-600">
                    <li>index.php → Laravel entry point</li>
                    <li>css/, js/ → Built files after npm run build</li>
                </ul>
            </section>

            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">config/</h2>
                <p class="text-gray-700 mb-4">Configuration files (app, database, mail…)</p>
                <ul class="list-disc pl-6 space-y-1 text-gray-600">
                    <li>Values often come from .env file</li>
                </ul>
            </section>
        </div>

        <!-- Footer -->
        <div class="bg-gray-100 py-8 text-center">
            <a href="/" class="inline-block bg-indigo-600 text-white font-semibold px-10 py-4 rounded-xl hover:bg-indigo-700">
                ← Back to Home
            </a>
            <p class="mt-6 text-gray-500 text-sm">
                Mini Project 1 • Chham Ratanak • Laravel Demo • February 2026
            </p>
        </div>
    </div>
    <a href="/env-demo" class="inline-block mt-6 px-8 py-4 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
    Try Environment Config Demo →
</a>
</body>
</html>
