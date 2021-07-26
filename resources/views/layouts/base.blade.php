<!DOCTYPE html>
<html>
<head>
    <title>Cafeteria de libros Virtual - El cafe virtual</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        .w3-bar-block .w3-bar-item {
            padding: 20px
        }
        #mySidebar{
            display:none;
            z-index:2;
            width:20%;
            min-width:300px
        }
        #closeMenu{
            position: absolute;
            right: 0;
            margin-bottom: 5%;
        }
        .imgPreview{
            width: 100%;
        }
        #footer{
            margin-top:100px;
        }
    </style>
</head>
<body>

<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-large w3-animate-left" id="mySidebar">
    <a href="#" onclick="cerrarMenu()" class="w3-button" id="closeMenu"><i class="fas fa-times"></i></a>

    <a href="{{ url('/') }}" onclick="cerrarMenu()" class="w3-bar-item w3-button">Inicio</a>
    <a href="{{ url('/libros') }}" onclick="cerrarMenu()" class="w3-bar-item w3-button">Libros</a>
    <a href="{{ url('/articulos') }}" onclick="cerrarMenu()" class="w3-bar-item w3-button">Articulos</a>
    <a href="{{ url('/generos') }}" onclick="cerrarMenu()" class="w3-bar-item w3-button">Géneros</a>
    <a href="{{ url('/login') }}" onclick="cerrarMenu()" class="w3-bar-item w3-button">Mi cuenta</a>
    @auth <a href="{{ url('/logout') }}" onclick="cerrarMenu()" class="w3-bar-item w3-button">Cerrar Sesión</a> @endauth
</nav>

<div class="w3-top" id="topBar">
    <div class="w3-white w3-xlarge" id="topBarContainer">

        <div class="w3-button w3-padding-16 w3-left" onclick="abrirMenu()"> <i class="fas fa-bars"></i> </div>
        <div class="w3-right w3-padding-16"><form action="{{ url('/buscar-libros') }}" method="post">@csrf</form></div>
        <div class="w3-center w3-padding-16">El Cafe Virtual</div>

    </div>
</div>

<div class="w3-container">

    @yield('contenido')

</div>



<div class="w3-main w3-content w3-padding" id="footer">
    <hr id="about">
    <footer class="w3-row-padding w3-padding-32">
        <div class="w3-half">
            <h3>Pie de página</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odit numquam corporis ab,
                laborum voluptatem, architecto accusantium vel pariatur deserunt magnam nemo totam quas doloribus
                incidunt aspernatur dolor cumque laboriosam!</p>
        </div>
        <div class="w3-half">
            <h3>Pie de página</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores odit numquam corporis ab,
                laborum voluptatem, architecto accusantium vel pariatur deserunt magnam nemo totam quas doloribus
                incidunt aspernatur dolor cumque laboriosam!</p>
        </div>
    </footer>
</div>

<script>
    function abrirMenu() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function cerrarMenu() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</body>
</html>
