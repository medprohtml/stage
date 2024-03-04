<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full p-6 bg-white rounded-md shadow-md">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            @if(session('status'))
                <div class="mb-4 text-green-500">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    class="mt-1 p-3 w-full rounded-md border-2 border-green-400 focus:outline-none focus:ring focus:border-blue-300" 
                    placeholder="Email"
                    required
                >
            </div>

            <div class="mb-6">
                <button 
                    type="submit" 
                    class="w-full px-4 py-2 rounded-md bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300"
                >
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
    
</body>
</html>
