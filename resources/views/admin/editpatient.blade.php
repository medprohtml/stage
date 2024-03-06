@extends('adminspace')
@section('admin')
<div class="container  py-8">
    <div class="  bg-white rounded-md overflow-hidden shadow-md">
        <div class="p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Edit User Details</h2>
            <form method="post" action="{{route('patientlist.update',['patientlist'=>$patient['id']])}}" >
         @method('PUT')
         @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="border-2 border-gray-300 rounded-md px-6 py-3 w-full " value="{{$patient['email']}}">
                </div>
                <div>
                    <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-1">WhatsApp Number</label>
                    <input type="tel" id="whatsapp" name="whatsapp" class="border-2 border-gray-300 rounded-md px-6 py-3 w-full " value="{{$patient['whatsapp']}}">
                </div>
                <div>
                </div>
                <div class=" w-full flex justify-center bg-blue-600">  <button  type="submit" class=" bg-blue-400">Modifer</button></div>

            </form>
        </div>
    </div>
</div>
    
    @endsection