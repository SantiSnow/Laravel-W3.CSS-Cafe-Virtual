<!DOCTYPE html>
<html>
    <head>
        <title>Administración</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    </head>
    <body>

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item">Panel de administración</h3>
  <a href="{{ url('/admin-libros') }}" class="w3-bar-item w3-button">Libros</a>
  <a href="{{ url('/admin-articulos') }}" class="w3-bar-item w3-button">Articulos</a>
  <a href="{{ url('/admin-libros') }}" class="w3-bar-item w3-button">Nueva Obra</a>
  <a href="{{ url('/admin-generos') }}" class="w3-bar-item w3-button">Géneros</a>
  <a href="{{ url('/admin-usuarios') }}" class="w3-bar-item w3-button">Usuarios</a>
  <a href="{{ url('/logout') }}" class="w3-bar-item w3-button">Salir</a>
</div>


<div style="margin-left: 20%">

    @yield('contenido')

</div>

</body>
</html>
