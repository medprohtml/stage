<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>

<body dir="rtl" class="  ">  
    <div dir="ltr" class="w-full flex justify-center text-center text-lg font-bold gap-4 items-center h-20 text-blue-400 bg-white shadow-md rounded-md px-3 py-2">
        <img class="w-16 h-16 object-cover" src="https://lh3.googleusercontent.com/a-/ALV-UjWAHUTwybvDtmQb5zCza7ScTkmgbfVV3E34HcCqYQsNVw=w90-h90-p-rp-mo-br100" alt="">
        <p>مركز الحياة للتحاليل الطبية</p>
    </div>
    <p class="w-full text-center flex justify-center text-white text-sm font-medium py-3 px-3 bg-red-600">
        خدماتنا من الساعة 8 صباحًا حتى 6 مساءً ما عدا الأحد من 8 صباحًا حتى 5 مساءً.
        <span class="ms-7"> Nos service de 8h à 18h sauf samedi et dimanche de 8h à 16Hn</span>
    </p>

    <nav dir="rtl" id="nav" class="md:pb-0  bg-white md:pt-0 w-full rounded-md flex justify-between px-6 h-16 shadow-xl items-center  font-medium text-sm">
        <h1 class="logo font-extrabold text-lg text-blue-500">CAMH</h1>
        <p id="btn" class="absolute left-9 lg:hidden">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"></path>
            </svg>
        </p>
        <ul dir="rtl" id="menu" class="delay-200 transition-all hidden nav mt-64 md:mt-0 flex flex-col md:flex-row gap-3 md:flex md:gap-16 ">
            <li class="px-5 py-3 text-white rounded-lg  bg-blue-600">
                <a href="{{ route('login') }}">صفحة المسؤول</a>
            </li>
            <li class="px-5 py-3 text-white rounded-lg bg-blue-600">
                <a href="{{route('loginshow')}}">نتائج التحاليل</a>
            </li>
            <li class="px-5 py-3 text-blue-500 border-b-0  hover:border-b-2 border-blue-600   ">
                <a href="{{ route('register') }}">صفحة</a>
            </li>
            <li class="px-5 py-3  text-blue-400 hover:border-b-2 border-blue-600   ">  <a href="#contact">    تواصل معنا  </a> </li>
            {{-- {{route('showpatinet')}} --}}
        </ul>
    </nav>

     <div class=" w-full ">
    <div class=" w-full grid grid-cols-2  justify-center ">
      <div class=" w-[50%]"><img class=" w-full" src="storage/labo3.png" alt=""></div>
      <div dir="ltr" class="  gap-6 ms-20 mt-12  items-center  flex flex-col justify-center  rounded-md    p-5    w-[50%]">
           <p class=" text-blue-500 font-bold  text-2xl"> 
           احصل على افضل التحاليل 
         </p> 
         <p class=" w-44 bg-blue-500 rounded-md px-4 py-3 text-center text-white shadow-lg font-medium text-lg">تتبع تحاليلك</p>
      </div>
    </div>

     </div>
     <div class=" w-full grid grid-cols-1 md:grid-cols-2 justify-center mt-5 p-0 md:p-11"> <section class=" w-[22rem] border-gray-200 border-2 rounded-md px-2 md:p-3 p-0 shadow-xl bg-white">
         <p class=" flex justify-center  w-full">Adress</p>
         <p> Centre d’Analyses Médicales Al Hayat :
            320 Av. Mohamed V, Ouazzane 16200</p>
            <div class=" w-full m-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d838739.9311750828!2d-6.71078816875003!3d34.79769259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0af3b765326821%3A0xad9e43b96b370d4a!2sCentre%20d&#39;Analyses%20M%C3%A9dicales%20Al%20Hayat!5e0!3m2!1sfr!2sma!4v1709730896942!5m2!1sfr!2sma" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <P class=" flex justify-center w-full"><a href="https://maps.app.goo.gl/1996fGxBq3uPKsKYA" class=" rounded-md bg-blue-400 shadow-md px-4 py-2 text-white mt-5">Google maps</a></P>
    </section>
    <section class=" h-max border-gray-200 border-2 rounded-md p-3 shadow-xl bg-white">
        <P class="  text-lg font-bold w-full justify-center text-center">من نحن</P>
        <p class=" md:leading-[4rem] leading-7 flex gap-3">
           
            يعتز مركز تحاليل الحياة الطبي في وزان بتقديم خدمات معملية متطورة مع التفاني في الجودة والدقة والموثوقية. يقوم المركز، الذي يمتلك أحدث التقنيات، بإجراء مجموعة واسعة من التحاليل الطبية، مع الحرص على تقديم نتائج سريعة وموثوقة والأخذ بعين اعتباره لسرية المرضى. يعكس التركيز على خدمة العملاء المتميزة، التي تضم فنيين معمل وديناميين وذوي خبرة، التفاني المستمر لتحقيق رضا العملاء. يتم توفير أسعار تنافسية لجميع اختبارات المعمل، مما يدعو سكان وزان إلى اختيار المركز للحصول على خدمات تحليل طبي احترافية وموثوقة، وبالتالي تعزيز التزامهم بالحفاظ على الصحة والعيش الحياة بشكل ممتازة.
        </p>
    </section>
</div>

    <footer class=" bg-slate-50 dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <!-- Footer content here -->
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://lh3.googleusercontent.com/a-/ALV-UjWAHUTwybvDtmQb5zCza7ScTkmgbfVV3E34HcCqYQsNVw=w90-h90-p-rp-mo-br100" class="h-8 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">مركز الحياة للتحاليل الطبية</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Our Main Services</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="" class="hover:underline">Hématologie</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">Biochimie</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">Immunologie</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">Sérologie</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">Microbiologie</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul id="contact" class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="" class="hover:underline ">whatapp</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">facebook</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    © 2024 <a href="https://flowbite.com/" class="hover:underline">مركز الحياة للتحاليل الطبية™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"></path>
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"></path>
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 1 0 10 20 9.911 9.911 0 0 0 10 .333Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 1-1.937 8.553 16.99 16.99 0 0 1-6.684 6.683 20.09 20.09 0 0 1-8.553 1.938 8.525 8.525 0 0 1-5.32-1.93 16.991 16.991 0 0 1-6.683-6.684A20.09 20.09 0 0 1 .332 8.554a8.527 8.527 0 0 1 1.93-5.32 16.99 16.99 0 0 1 6.684-6.683 20.09 20.09 0 0 1 8.553-1.937 8.525 8.525 0 0 1 5.32 1.93 16.991 16.991 0 0 1 6.683 6.684 20.09 20.09 0 0 1 1.938 8.553 8.527 8.527 0 0 1-1.93 5.32 16.991 16.991 0 0 1-6.684 6.683 20.09 20.09 0 0 1-8.553 1.938A8.525 8.525 0 0 1 .333 19.68a16.991 16.991 0 0 1-1.93-6.684A20.09 20.09 0 0 1 .332 4.343 8.527 8.527 0 0 1 2.263.333a16.991 16.991 0 0 1 6.684-1.93 20.09 20.09 0 0 1 8.553 1.938Z"></path>
                        </svg>
                        <span class="sr-only">GitHub repository</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>