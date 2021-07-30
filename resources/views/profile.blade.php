@extends('layouts.base')
<head>
    <style>
        .preview{
            width: 100%;
            height: 300px;
        }
        #contenido{
            margin-top:5%;
        }
        .w-5{
            width: 10%;
        }
        .hidden{
            display: none;
        }
        .w3-display-topmiddle{
            text-align: center;
        }
        .w3-quarter{
            margin-bottom: 2%;
        }
        .w3-card-4{
            margin: auto;
        }
    </style>
</head>
@section('contenido')

    <div class="w3-main w3-content w3-padding" id="contenido">
        <div class="w3-row-padding w3-padding-16 w3-center">
            <h3>Bienvenido de nuevo {{ $user->name }}</h3>

            <p>Esperamos que se encuentre bien. Este es su perfil:</p>

            <br>
            <br>

            <div class="w3-card-4" style="width:70%">
                <header class="w3-container w3-light-grey">
                    <h3> {{ $user->name }} </h3>
                </header>
                <div class="w3-container">
                    <p>Su correo electronico: {{ $user->email }}</p>
                    <p>Cuenta verificada: @if($user->email_verified_at == null) No <i class="fas fa-times"></i> @else Si <i class="fas fa-check"></i> @endif</p>
                    <hr>
                    <p>Recuerde que si desea comprar libros, puede buscarlos en la pagina principal.</p><br>
                </div>
                @if($user->role_id == 1) 
                    <p>Ingresar al panel de administración</p>
                    <a href="{{ url('/dashboard') }}" class="w3-btn w3-blue">Dashboard</a>
                @endif
            </div>
        </div>
    </div>

    <div class="w3-display-container">
        <div class="w3-row">

        </div>
    </div>


@endsection
