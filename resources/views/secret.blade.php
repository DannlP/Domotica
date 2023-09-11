<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina privada</title>
    <link rel="stylesheet" href="{{ asset('css/privado.css') }}">

</head>
<body>
  <div class="containerF">

<div class="container">

  <header class="d-flex flex-wrap aling-items-center justify-content-center 
    justify-content-md-between py-3 mb-4 border- bottom">

   
  <nav class="menu">
  <ul>
    <li><a href="http://localhost/Domoftware/public/privada">Funciones</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ul>
</nav>

<div class="col-md-3 text-end">
  <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2"
  >Salir</a>
</div>


    
  </header>

</div>

<img src="{{ asset('images/Icono.png') }}">
<h3>DOMOFTWARE</h3>


<h1 class="d-flex alingn-items-center col-mb-3 mb-2 mb-md-0
    text-dark text-decoration-none"> 
    Bienvenido, @auth  {{Auth::user()->name}} @endauth 
  </h1>


<div class="containerFunciones"> 

<h2>Estadisticas:</h2>

<p><center>-------------------</center></p>



<button class="button" onclick="verHistorial()">Ver Historial de Riegos</button>

<script>
  function verHistorial() {
    window.location.href = "historial";
  }
</script>

</div>


</div>



</body>
</html>