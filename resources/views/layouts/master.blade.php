<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Digital Procurement Summit 2026</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Header / Navigation -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0">
                    <a href="/" class="text-xl font-bold text-blue-900">DPA 2026</a>
                </div>
                <!-- Nav Links (Placeholder) -->
                <nav class="hidden space-x-8 sm:flex">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                    <a href="{{ route('delegates') }}" class="text-gray-700 hover:text-blue-600">Delegates</a>
                    <a href="{{ route('agenda') }}" class="text-gray-700 hover:text-blue-600">Agenda</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2026 Africa Digital Procurement Summit. Organized by Gloopro.</p>
        </div>
    </footer>

</body>
</html>