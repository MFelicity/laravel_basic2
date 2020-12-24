<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
   integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
   crosssorigin="anonymous"/>
   <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
<title>Todos</title>
@livewireStyles
</head>

<body> 

    <div class ="container text-center flex justify-center pt-10">
       <div class ="w=1/3 border border-gray-300 rounded py=4">
       @yield('content') 
       </div> 
    </div>         
@livewireScripts
</body>
</html>
