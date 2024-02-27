<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <form action="{{route('newpatient')}}" enctype="multipart/form-data" method="POST" class=" gap-5 w-2/4 flex flex-col">
        @csrf
        <input name="idp" type="text" class=" border-2 border-black rounded-md" value="patient numero">
      <input name="name" type="text" class=" border-2 border-black rounded-md" value="patinet name">
      <input name="prenom" type="text" class=" border-2 border-black rounded-md" value="patient prenom">  
      <input name="idd" type="text" class=" border-2 border-black rounded-md" value="numero dossier">
     
      <label for="">Resulta</label>
      <input name="result" type="file">
     <input type="submit" value="send">
    
    </form>
</body>
</html>