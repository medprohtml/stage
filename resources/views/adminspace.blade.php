<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Admin Dashboard</title>
</head>

<body class="font-sans bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <aside class="bg-gray-800 text-white w-64 min-h-screen p-6">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
        <nav>
            <ul class="space-y-2">
                <li><a href="#" class="block py-2 px-4">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-4">Users</a></li>
                <li><a href="#" class="block py-2 px-4">Posts</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

        <!-- Add Patient Button -->
        <a href="{{ route('showpatient') }}"
           class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">
            Add Patient
        </a>

        <!-- Your main content goes here -->

    </main>

</body>

</html>
