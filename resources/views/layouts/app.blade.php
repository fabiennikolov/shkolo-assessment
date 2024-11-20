<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web App</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">

    <nav class="bg-blue-500 text-white p-4">
        <ul class="flex space-x-4">
            <li><a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a></li>
        </ul>
    </nav>

    <div class="container mx-auto min-h-screen">
        @yield('content')
    </div>

    <!-- Optional: Footer Section -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-6">
        <p>&copy; 2024 My Web App</p>
    </footer>

</body>
</html>
