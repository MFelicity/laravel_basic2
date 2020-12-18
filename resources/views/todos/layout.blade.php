<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
   integrity="sha256-mmgLkCYQbxn01SRqzHar6dCnv9oZFPEC1g1cwlkk="
   crosssorigin="anonymous"/>
<title>Todos</title>
</head>

<body> 

    <div class ="text-center flex justify-center pt-10">
       <div class ="w=1/3 border border-gray-300 rounded py=4">
      
       @include('components.message')
       @yield('content') 
       </div> 
    </div>         

</body>
</html>
