@extends('layot.layot')

@section('content')
  @if(session('msj2'))
  <div id="message" class=" top-16 transition-all delay-700  flex justify-center fixed w-full">
   <div class=" border-2 px-4 md:px-24 text-center ms-3 py-4 text-white font-medium text-sm bg-blue-500 shadow-2xl rounded-md ">
     {{ session('msj2') }}
     
    
  </div>
</div>

@endif
      <div dir="rtl" class="w-full flex justify-center   px-5  h-screen ">
      <form class=" w-96 h-96 shadow-xl  mt-6   p-5 pt-24" method="POST" action="{{route('whatsappstore')}}">
        @method('PUT')
        @csrf
        <div class=" flex flex-col gap-2">
        <p class=" font-medium text-sm">اكتب واتساب هنا</p>
        <input name="whatsapp" placeholder=" واتساب" value="{{$patient->whatsapp}}" class=" border-2 border-green-400 rounded-md px-4 py-3" type="text"  >
   <div class=" w-full flex justify-center"><input class=" cursor-pointer hover:bg-green-300 hover:scale-105 rounded-md px-8 py-4 bg-green-400 shadow-md " type="submit" value="اضافة" name="" id=""> </div>
</div>
      </form>
  
    </div>
@endsection