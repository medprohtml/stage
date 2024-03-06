
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
               
                <li><a href="{{route('showpatinet')}}" class="block w-full py-2 px-1">AJouter patient ou dossier</a></li>
                @if(Auth::user()->Hasrole=="Admin")
                <li><a href="{{route('addres')}}" class="block w-full py-2 px-1">AJouter responsable   </a></li>
                @endif
                <li><a href="{{route('patientlist.index')}}" class="block w-full py-2 px-1">Tout patients   </a></li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
        <h1>hello {{Auth::user()->Hasrole}}</h1>

        <!-- Add Patient Button -->
       @yield('admin')

        <!-- Your main content goes here -->

    </main>

</body>

</html>
