<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment Config Demo - Mini Project 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-50 via-white to-green-50 min-h-screen py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header Card -->
        <div class="bg-green-600 text-white rounded-t-2xl shadow-xl overflow-hidden">
            <div class="px-8 py-12 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Environment Configuration Demo</h1>
                <p class="text-xl md:text-2xl opacity-90">Mini Project 2 – Showing .env values safely using config()</p>
            </div>
        </div>

        <!-- Main Content Cards -->
        <div class="bg-white rounded-b-2xl shadow-xl p-8 md:p-12 space-y-8">
            <!-- App Name -->
            <div class="bg-gray-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-green-800 mb-3">Application Name</h2>
                <div class="bg-white p-5 rounded border shadow-sm font-mono text-xl">
                    {{ config('app.name') }}
                </div>
                <p class="mt-3 text-gray-600 text-sm">From <code>config('app.name')</code> ← reads <code>APP_NAME</code> in .env</p>
            </div>

            <!-- Environment -->
            <div class="bg-gray-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-green-800 mb-3">Current Environment</h2>
                <div class="bg-white p-5 rounded border shadow-sm font-mono text-xl uppercase">
                    {{ app()->environment() }}
                </div>
                <p class="mt-3 text-gray-600 text-sm">Usually <strong>local</strong> when developing</p>
            </div>

            <!-- Debug Mode -->
            <div class="bg-gray-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-green-800 mb-3">Debug Mode</h2>
                <div class="bg-white p-5 rounded border shadow-sm font-mono text-xl">
                    {{ config('app.debug') ? 'Enabled (true)' : 'Disabled (false)' }}
                </div>
                <p class="mt-3 text-gray-600 text-sm">Should be <strong>true</strong> in local, <strong>false</strong> in production</p>
            </div>

            <!-- App URL -->
            <div class="bg-gray-50 border-l-4 border-green-500 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-green-800 mb-3">Application URL</h2>
                <div class="bg-white p-5 rounded border shadow-sm font-mono text-xl">
                    {{ config('app.url') }}
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-10">
            <a href="/" class="inline-block bg-green-600 hover:bg-green-700 text-white font-medium px-10 py-4 rounded-xl shadow-lg transition">
                ← Back to Home
            </a>
            <p class="mt-6 text-gray-500 text-sm">
                Mini Project 2 • Chham Ratanak • Laravel Demo • March 2026
            </p>
        </div>
    </div><!-- Database Connection -->
<div class="bg-gray-50 border-l-4 border-green-500 p-6 rounded-lg">
    <h2 class="text-2xl font-semibold text-green-800 mb-3">Database Connection</h2>
    <div class="bg-white p-5 rounded border shadow-sm font-mono text-xl uppercase">
        {{ config('database.default') }}
    </div>
    <p class="mt-3 text-gray-600 text-sm">From config('database.default') ← reads DB_CONNECTION in .env</p>
</div>
</body>
</html> 