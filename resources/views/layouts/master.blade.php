<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.seo-meta')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Header Component -->
    @include('components.header')

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

</body>
</html>