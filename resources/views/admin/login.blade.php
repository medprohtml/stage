<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="body flex justify-between h-screen items-center">
    <a href="/" class="absolute top-2 mt-5 ms-7 font-medium text-sm rounded-md bg-slate-300 px-5 py-2 shadow-md">العودة</a>

    <form dir="rtl" method="POST" action="{{ route('login') }}" class="w-full md:w-96 p-8 flex flex-col gap-4 rounded-md">
        @csrf
        <div class="w-full flex justify-center mb-8 text-green-400 font-medium text-xl">مرحبا بك</div>
        <div class="gap-4 w-full p-1 flex flex-col">
            <label for="email">البريد الإلكتروني</label>
            <input class="w-full px-3 py-4 rounded-md border-2 border-green-400" type="text" name="email" placeholder="البريد الإلكتروني">
        </div>
        <div class="gap-4 w-full p-1 flex flex-col">
            <label for="password">كلمة المرور</label>
            <input class="w-full px-3 py-4 rounded-md border-2 border-green-400" type="password" name="password" placeholder="كلمة المرور">
        </div>
        <div class="w-full rounded-md flex justify-center items-center h-12 mt-8 bg-green-400 shadow-lg font-medium text-sm">
            <input class="text-white cursor-pointer" type="submit" value="تسجيل الدخول">
        </div>
        @if (Route::has('password.request'))
            <a class="mt-4 text-green-500 text-sm" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>

    <div class="hidden md:block w-full h-screen">
        <img class="h-screen object-cover" src="storage/loginimage.jpg" alt="">
    </div>
</body>
</html>
