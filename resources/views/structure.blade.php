<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Folder Structure Explorer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen py-12 px-4">
    <div class="max-w-5xl mx-auto bg-white shadow-2xl rounded-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-indigo-600 text-white py-10 px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">Laravel Core Folders Explained</h1>
            <p class="text-xl opacity-90">Mini Project 1 - Understanding Laravel Architecture</p>
        </div>

        <!-- Main Content -->
        <div class="p-8 md:p-12 space-y-12">
            <!-- app/ -->
            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">app/</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    The heart of your application — contains all core custom code (business logic, controllers, models, etc.).
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li><strong>Http/Controllers/</strong> → Handles incoming requests and returns responses</li>
                    <li><strong>Models/</strong> → Eloquent models for database interaction</li>
                    <li><strong>Providers/</strong> → Registers services & bindings</li>
                    <li><strong>Exceptions/</strong> → Custom error handling</li>
                </ul>
            </section>

            <!-- routes/ -->
            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">routes/</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Defines all URLs (routes) and what happens when they're visited.
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li><strong>web.php</strong> → Routes for web pages (with sessions & CSRF protection)</li>
                    <li><strong>api.php</strong> → API routes (stateless)</li>
                    <li><strong>console.php</strong> → Defines Artisan commands</li>
                </ul>
            </section>

            <!-- resources/ -->
            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">resources/</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Frontend-related files — what users see and interact with.
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li><strong>views/</strong> → Blade templates (.blade.php files)</li>
                    <li><strong>css/ & js/</strong> → Your styles and scripts (compiled by Vite)</li>
                    <li><strong>lang/</strong> → Translation files (multi-language support)</li>
                </ul>
            </section>

            <!-- public/ -->
            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">public/</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    The only folder directly accessible from the browser — entry point & static assets.
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li><strong>index.php</strong> → Laravel's main entry file (bootstraps the app)</li>
                    <li>css/, js/, images/ → Built/compiled frontend files</li>
                </ul>
            </section>

            <!-- config/ -->
            <section class="border-l-4 border-indigo-500 pl-6 bg-gray-50 rounded-r-xl p-6">
                <h2 class="text-3xl font-semibold text-indigo-700 mb-4">config/</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    All application configuration files (database, mail, app settings, etc.).
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li>Values often pulled from <code>.env</code> file using <code>env()</code> or <code>config()</code></li>
                    <li><strong>app.php</strong>, <strong>database.php</strong>, <strong>cache.php</strong>, etc.</li>
                </ul>
            </section>
        </div>

        <!-- Footer / Navigation -->
        <div class="bg-gray-100 py-8 px-8 text-center">
            <a href="/" class="inline-block bg-indigo-600 text-white font-semibold px-10 py-4 rounded-xl hover:bg-indigo-700 transition text-lg">
                ← Back to Home
            </a>
            <p class="mt-6 text-gray-500 text-sm">
                Mini Project 1 by Chham Ratanak • Laravel Demo • February 2026
            </p>
        </div>
    </div>
</body>
</html>