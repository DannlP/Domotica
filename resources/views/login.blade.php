<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>


<main class="container aling-center p-5">
    <form method="POST" action="{{route('iniciar-sesión')}}">
    @csrf

       <img src="{{ asset('images/Icono1.png') }}">

        <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailInput" name="email" require>
       </div>

       
       <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="passwordInput" class="form-control" id="passwordInput" name="password" require>
       </div>  

       <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
            <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
       </div>  

       <div>
        <p>¿No tienes cuenta? <a href="{{route('registro')}}">Registrate</a></p>
        <button type="submit" class="btn btn-primary">Aceder</button>
    
       </div>

   </form>

 
</main>



</body>
</html>