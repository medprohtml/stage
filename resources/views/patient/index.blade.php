@extends('layot.layot')
   @section('content')
    <p class=" font-medium text-sm m-6"> مرحبا  {{$patient->nom}} {{$patient->prenom}}</p>
        @if(session('msj'))
        <div id="message" class=" top-16 transition-all delay-700 flex justify-center fixed w-full">
         <div class=" border-2 px-4 md:px-24 text-center ms-3 py-4 text-white font-medium text-sm bg-blue-500 shadow-2xl rounded-md ">
           {{ session('msj') }}
           
          
        </div>
      </div>

      @endif
   <div class=" p-4 md:p-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-3 ">


    @forelse ($doss as $dos)
    
    <section class=" flex flex-col border-2 border-gray-200 rounded-md gap-2 shadow-xl">
        <p class=" ms-3">تم التحميل في {{$dos['created_at']}}</p>
    <iframe class=" w-full md:aspect-[4/3]  rounded-md" src="{{asset('storage/'.$dos['Resultas'])}}" frameborder="4"></iframe>

    <div class=" w-full flex justify-center">
   <form class=" p-1  w-full md:w-auto justify-between md:block flex " method="POST" action="{{route('sendmail')}}">
    @csrf
    <input name="res" type="hidden" value="{{$dos['Resultas']}}">
    @if($patient->email=='default email')
    <p class=" bg-slate-300 rounded-md py-2 px-2" >اضف بريدك الالكتروني للارسال</p>
    @else
    <button type="submit" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
        ارسال في البريد الالكتروني
      <svg class="mr-2 -ml-1 w-4 h-4 me-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>

      </button>
    @endif
  <a href="{{asset('storage/'.$dos['Resultas'])}}"  class="text-white gap-1 bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-2 py-2.5 text-center md:hidden  inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2  "> 
      تحميل
    <img class="  text-white w-6 h-6" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA6CAYAAADhu0ooAAAACXBIWXMAAAsTAAALEwEAmpwYAAACpklEQVR4nO2aS6hNURjHf56F8rqRAUnKhEJeKSMTJWTCSGp3k5IwUB65ueUqk2tisJIJQ6c8BjJjYqLciUeiGHgWYXAjr3tdrVpqt3xrn73Ofty1T+tX3+S09re+/1n/ddbjbKiGI8BHYMwzPgFHaQgrgT8diEzHGhrA3oIidfTSAJIShO6noUJvABcdca2bhG7IaL86Cg2cJI6oTLRu6CTRujLRuqGTROvKROuGThKtKxOtGzpJtK5MtG7oJNG6MtG6oZNE68pE64bABOAM8A74YsXXEqz7Tcir++qnZnZ63rz7Cs2K7TXq5LRncSsyci3zzHWqRp2sB0ZzFvYEmJyRaxLwMGeuEWAtNXPCUcx7oGXiLDA/R655wEDque+O3IeLFHzMii0eP0hXhWJ+A5sL1HPSIfKCR47pwBwr/kuoPBJOA4aEHJ+Bpf4a2eWYErfb2N9GCTkKCdUsdvyNr+fdDI8868yyYud5DMzyrElVIVSzCfgp5LpuLN6OJcAH4Xm9di7qoB4lCW1ZsY/OOOSYW3rOZTEXeCY8Nwys6rAWJQktk0tCB3rObXO0nwLccSwjOwrUoaoWOhW45xid5VZbbekrDhccLFiHqlqoZgHwVujoOTA71a7fIfJ8CTUoSai9eR4soaONwA+hs1vARGCP412km2anVBRV1a+uRK9jxFqOL2HIczkKRihmNzOWI7TVF1Ieqm6hejdzt43IYfNaHU0WqukBXjpEjmQsPY0Tihkx6ebhANWgxkuoZjfwK9WPPpbRjUL/XZv0AVupFjXeQutCRaHEEe0e645aH7wQzqh1xOWMl5d946mlSe+reZVzm9bkeKOFngugkKpjEHNiuB9AMVXFo/Tlmr62PA48MPtSfV1pn1PrDNcFtk+8NiM5Uyv8C8hny00HxAYHAAAAAElFTkSuQmCC">
  </a> 
      
</form>
</div>
    </section>
   
    
    @empty
    <p>no re</p>
    @endforelse
</div>
@endsection