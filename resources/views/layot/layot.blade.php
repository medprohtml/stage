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
  <div dir="ltr" class="  w-ful l flex justify-center text-center  text-lg font-bold gap-4 items-center h-20  text-blue-400 bg-white shadow-md rounded-md px-3 py-2"> <img class=" w-16 h-16 object-cover" src="https://lh3.googleusercontent.com/a-/ALV-UjWAHUTwybvDtmQb5zCza7ScTkmgbfVV3E34HcCqYQsNVw=w90-h90-p-rp-mo-br100" alt=""> <p>Centre d'Analyses Médicales Al Hayat </p></div>

   <p class=" w-full text-center flex justify-center text-white text-sm font-medium py-3 px-3 bg-red-600">خدماتنا من الساعة 8 صباحًا حتى 6 مساءً ما عدا الأحد من 8 صباحًا حتى 5 مساءً.    <span class=" ms-7"> Nos service de 8h à 18h sauf samedi et dimanche de 8h à 16Hn</span> </p>
    <nav id="nav" class="@if(session('testemail')=='default email'|| session('testwhatsapp')=='default whatsapp') hidden @else flex @endif delay-200 transition-all    lg:pb-0 lg:pt-0 px-10   w-full   flex justify-between  h-16 border-b-2 border-gray-300  items-center   font-medium text-sm">

      <p id="btn" class=" absolute left-9 lg:hidden " ><svg class=" w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
        <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"></path>
        </svg></p>
        
        <ul id="menu" class=" w-full justify-center delay-200 transition-all   hidden nav mt-96 lg:mt-0 flex  flex-col lg:flex-row gap-3   lg:flex lg:gap-16 ">

          <li class=" hover:scale-110 delay-150 transition-all px-5 py-3  rounded-lg "><a class="  flex" href={{route('index')}}> صفحة التحاليل
            
          </a> </li>
          <li  class= "hover:scale-110 delay-150 transition-all flex px-5 py-3   rounded-lg ">انواع التحاليل
          
          </li>
          <li class="hover:scale-110 delay-150 transition-all flex px-5 py-3  lrounded-lg ">تواصل معنا
           
          </li>
      

          <li class=" text-left hover:scale-110 delay-150 transition-all px-5 py-3   "><a class=" flex" href={{route('logout')}}>تسجيل الخلروج
        
          </a> </li>

        </ul>
  
      </nav>
      @yield('content')
      </html>
    </body>