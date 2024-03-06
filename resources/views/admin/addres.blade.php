<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('adminspace')
    @section('admin')

    @if(Auth::user()->Hasrole=="Admin")
    <div class="w-full ">
        <form method="POST" action='{{route('addres')}}' class="bg-white shadow-md w-full rounded px-8 pt-6 pb-8 mb-4">
         @csrf
          <div class="flex gap-5 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
              Email Address
            </label>
            <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email Address">
         
            <label  class="block text-gray-700 text-sm font-bold mb-2" for="nom">
              Nom
            </label>
            <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Nom">
          </div>
         
          <div class="flex gap-5 mb-4">
            <label  class="block text-gray-700 text-sm font-bold mb-2" for="nom">
              password
            </label>
            <input name="pass" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Nom">
         
            <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
              Role
            </label>
           
            <div class="relative w-full">
              <select name="role" class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" id="role">
                <option value="Admin">Admin</option>
                <option value="Responsable">Responsable</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 12a1 1 0 01-.7-.3l-4.6-4.6A1 1 0 016.3 5l4.6 4.6 4.6-4.6a1 1 0 111.4 1.4l-5 5a1 1 0 01-.7.3z" clip-rule="evenodd"/>
                </svg>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Add Responsable
            </button>
          </div>
        </form>
      </div>
   
      

      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                         Responsable nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Responsable email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Responsable role
                    </th>
               
                    <th scope="col" class="px-6 py-3">
                      Action
                  </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$user->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->Hasrole}}
                    </td>
           

                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@endif
       @endsection
</body>
</html>