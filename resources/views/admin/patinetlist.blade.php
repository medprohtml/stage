@extends('adminspace')
@section('admin')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Patient nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Patient prenom
                </th>
                <th scope="col" class="px-6 py-3">
                    Patient email
                </th>
                <th scope="col" class="px-6 py-3">
                    Patient whatsapp
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$patient->nom}}
                </td>
                <td class="px-6 py-4">
                    {{$patient->prenom}}
                </td>
                <td class="px-6 py-4">
                    {{$patient->email}}
                </td>
                <td class="px-6 py-4">
                    {{$patient->whatsapp}}
                </td>
                <td class="px-6 py-4">
                    {{$patient->patientid}}
                </td>
                <td class="px-6 py-4">
                    <form method="GET" action="{{route('patientlist.edit',['patientlist'=>$patient['id']])}}">
                        @csrf
                        
                        <input type="submit" value="Edit">
                </form>
                <form method="post" action="{{route('patientlist.destroy',['patientlist'=>$patient['id']])}}">
                    @method('DELETE')
                    @csrf
                    
                    <input type="submit" value="destroy">
            </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
