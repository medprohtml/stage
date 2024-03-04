
    @extends('adminspace')
    @section('admin')
    <form action="{{ route('newpatient') }}" enctype="multipart/form-data" method="POST" class=" bg-white p-8 rounded-md ">
        @csrf
    
        <div class="mb-4 flex gap-6">
            <div class=" flex gap-2 w-full">
            <label for="idp" class="block text-sm w-full font-medium text-gray-700">Patient Number</label>
            <input name="idp" type="text" class="w-full px-3 py-2 border-2 border-gray-300 rounded-md" placeholder="Enter patient number">
           </div>
    
           <div class=" flex w-full">
            <label for="name" class="block  text-sm w-full font-medium text-gray-700">Patient Name</label>
            <input name="name" type="text" class="w-full px-3 py-2 border-2 border-gray-300 rounded-md" placeholder="Enter patient name">
        </div>
        </div>
    
        <div class="mb-4 flex gap-6">
            <div class=" flex  w-full">
            <label for="prenom" class="block w-full text-sm font-medium text-gray-700">Patient Surname</label>
            <input name="prenom" type="text" class="w-full px-3 py-2 border-2 border-gray-300 rounded-md" placeholder="Enter patient surname">
        </div>
            <div class=" flex w-full ">
            <label for="idd" class="block w-full text-sm font-medium text-gray-700">File Number</label>
            <input name="idd" type="text" class="w-full px-3 py-2 border-2 border-gray-300 rounded-md" placeholder="Enter file number">
        </div>
         </div>
    
        <div class="mb-4">
            <label for="result" class="block w-full text-sm font-medium text-gray-700">Result</label>
            <input name="result" type="file" class="w-full">
        </div>
    
        <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
            Submit
        </button>
    </form>
    @endsection
