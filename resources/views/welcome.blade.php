<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
   @vite(['resources/js/app.js'])

</head>
<body class=" px-5">  
    <nav id="nav" class="   md:pb-0 md:pt-0   w-full  rounded-md flex justify-between px-6 h-16 shadow-xl items-center bg-slate-50  font-medium text-sm">
   
      <h1 class="  logo font-extrabold text-lg text-green-500">CAMH </h1>
      <p id="btn" class=" absolute right-9" >menu</p>
      <ul id="menu" class=" delay-200  transition-all hidden nav mt-64 md:mt-0 flex flex-col md:flex-row gap-3   md:flex md:gap-16 ">

        <li class=" px-5 py-3 text-white rounded-lg bg-green-600" ><a href="{{route('showpatinet')}}" >صفحة المسوول</a></li>
        <li class=" px-5 py-3 text-white rounded-lg bg-green-600"><a  href="{{route('loginshow')}}" > نتائج التحاليل</a></li>
        <li  class=" px-5 py-3 bg-white shadow-md rounded-md ">انواع التحاليل</li>
        <li class=" px-5 py-3 bg-white shadow-md rounded-md ">تواصل معنا</li>
      </ul>

    </nav>
    {{-- 
     --}}

</body>
</html>