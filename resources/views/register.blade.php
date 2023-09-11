<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
<main class="container aling-center p-5">
    <form method="POST" action="{{route('validar-registro')}}">
        @csrf

        <img src="{{ asset('images/Icono.png') }}">


        <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailInput" name="email" require autocomplete="disable">
       </div>

       
       <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="passwordInput" class="form-control" id="passwordInput" name="password" require autocomplete="disable">
       </div>  

       <div class="mb-3">
            <label for="userInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="userInput" name="name" require autocomplete="disable">
       </div>  

       <div>
       <p>¿Tienes cuenta? <a href="{{route('login')}}">Iniciar seccion</a></p>
       <button type="submit" class="btn btn-primary">Registrarse</button>
       </div>
   </form>
</main>


</body>
</html>