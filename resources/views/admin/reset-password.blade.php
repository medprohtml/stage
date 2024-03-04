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
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            @if(session('status'))
                <div class="mb-4 text-green-500">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" placeholder="Email"
                    class="mt-1 p-3 w-full rounded-md border-2 border-green-400 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">كلمة المرور</label>
                <input type="password" name="password" placeholder="كلمة المرور"
                    class="mt-1 p-3 w-full rounded-md border-2 border-green-400 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">تأكيد كلمة المرور</label>
                <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور"
                    class="mt-1 p-3 w-full rounded-md border-2 border-green-400 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <input type="hidden" value="{{ request()->route('token') }}" name="token">

            <div class="grid">
                <button type="submit"
                    class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    تحديث كلمة المرور
                </button>
            </div>
        </form>
    </div>

</body>

</html>
