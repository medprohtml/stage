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
   
      <p id="btn" class=" absolute left-9 lg:hidden " ><svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
        <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"></path>
        </svg></p>
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