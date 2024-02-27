<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])

</head>
<body dir="rtl" >
  <nav id="nav" class="delay-200  transition-all   md:pb-0 md:pt-0   w-full  rounded-md flex justify-between px-6 h-16 shadow-xl items-center bg-slate-50  font-medium text-sm">
    <h1 class="  logo font-extrabold text-lg text-green-500">CAMH </h1>
  <p id="btn" class=" absolute left-9" >menu</p>
    
    <ul id="menu" class=" delay-200  transition-all hidden nav mt-64 md:mt-0 flex flex-col md:flex-row gap-3   md:flex md:gap-16 ">


      <li  class=" px-5 py-3 bg-white shadow-md rounded-md ">انواع التحاليل</li>
      <li class=" px-5 py-3 bg-white shadow-md rounded-md ">تواصل معنا</li>
      <li class=" px-5 py-3 bg-white shadow-md rounded-md "><a href={{route('addmail',session('id'))}}> اضافة واتساب و بريد الكتروني</a> </li>
      <li class=" px-5 py-3 bg-white shadow-md rounded-md "><a href={{route('logout')}}>تسجيل الخلروج</a> </li>

    </ul>

  </nav>
  @if(session('msj2'))
  <div id="message" class=" top-16 transition-all delay-700  flex justify-center fixed w-full">
   <div class=" border-2 px-4 md:px-24 text-center ms-3 py-4 text-white font-medium text-sm bg-blue-500 shadow-2xl rounded-md ">
     {{ session('msj2') }}
     
    
  </div>
</div>

@endif
      <div dir="rtl" class="w-full flex md:justify-center   h-screen ">
      <form class=" w-96 h-96 shadow-xl  mt-6 ms-11 p-5 pt-24" method="POST" action="{{route('storemail')}}">
        @method('PUT')
        @csrf
        <div class=" flex flex-col gap-2">
          <p class=" font-medium text-sm">اكتب بريدك الالكتروني هنا</p>
        <input name="email" placeholder="البريد الالكتروني" class=" border-2 border-green-400 rounded-md px-4 py-3" type="text" value="{{$patient->email}}" >
        @error('email')
        <div class=" text-red-500">{{ $message }}</div>
    @enderror
        <p class=" font-medium text-sm">اكتب واتساب هنا</p>
        <input name="whatsap" placeholder=" واتساب" class=" border-2 border-green-400 rounded-md px-4 py-3" type="text"  >
   <div class=" w-full flex justify-center"><input class=" cursor-pointer hover:bg-green-300 hover:scale-105 rounded-md px-8 py-4 bg-green-400 shadow-md " type="submit" value="اضافة" name="" id=""> </div>
</div>
      </form>
  
    </div>
</body>
</html>