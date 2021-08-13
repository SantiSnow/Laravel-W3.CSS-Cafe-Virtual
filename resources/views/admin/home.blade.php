@extends('layouts.admin')
@section('contenido')

    <div class="w3-container">
        <h1>Administración</h1>
    </div>

    <div class="w3-container">
        <p>Desde aquí puede crear nuevos artículos, libros, administrar a los usuarios y mucho más.</p>
    </div>

    <div class="w3-container">
        <div class="w3-third">
            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <h3>Administrar libros</h3>
                </header>
                <div class="w3-container">
                    <hr>
                    <p>Desde aquí puede administrar los libros en el sistema.</p>
                    <br>
                </div>
                <a class="w3-button w3-block w3-dark-grey" href="{{ url('/admin-libros') }}">Administrar</a>
            </div>
        </div>
    
        <div class="w3-third">
            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <h3>Administrar artículos</h3>
                </header>
                <div class="w3-container">
                    <hr>
                    <p>Desde aquí puede administrar los artículos en el sistema.</p>
                    <br>
                </div>
                <a class="w3-button w3-block w3-dark-grey" href="{{ url('/admin-articulos') }}">Administrar</a>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <h3>Administrar usuarios</h3>
                </header>
                <div class="w3-container">
                    <hr>
                    <p>Desde aquí puede administrar a los usuarios en el sistema.</p>
                    <br>
                </div>
                <a class="w3-button w3-block w3-dark-grey" href="{{ url('/admin-usuarios') }}">Administrar</a>
            </div>
        </div>
    </div>
@endsection