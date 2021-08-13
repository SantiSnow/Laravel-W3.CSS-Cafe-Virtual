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
        #titulo{
            margin-top: 5%;
        }
    </style>
</head>
@section('contenido')
    
  
    <div class="w3-row" id="titulo">      
        <div class="w3-center w3-padding-16">
            <h4>Géneros</h4>
            <br>
            <p>Aquí puede encontrar todos los géneros disponibles al momento, en nuestra plataforma. Esperemos que sean de tu agrado.</p>
        </div>
    </div>
    

    <div class="w3-main w3-content w3-padding" id="contenido">
        <div class="w3-row-padding w3-padding-16 w3-center">
            @foreach($generos as $genero)
                <div class="w3-quarter">
                    <a href="{{ url('/genero/'.$genero->id) }}"><h3>{{ $genero->name }}</h3></a>
                    <p class="word-break">{{ $genero->description  }}</p>
                    <a class="w3-btn w3-blue" href="{{ url('/genero/'.$genero->id) }}">Ver más</a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="w3-display-container">
        <div class="w3-row">
            <div class="w3-third w3-display-topmiddle">
                
            </div>
        </div>
    </div>


@endsection
