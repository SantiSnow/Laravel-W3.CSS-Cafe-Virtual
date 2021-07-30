@extends('layouts.base')
<head>
    <style>
        .preview{
            width: 100%;
            height: 300px;
        }
        #contenido{
            margin-top: 8%;
        }
    </style>
</head>
@section('contenido')
    
    <div class="w3-main w3-content w3-padding" id="contenido">
        <div class="w3-row">
            <div class="w3-col w3-container m4 l3 w3-blue">
                <img src="{{ url('storage/'.$article->image) }}" alt="" class="preview">
                <h6 class="w3-center">{{ $article->title }}</h6>
                <p class="w3-center"><a class="w3-btn w3-aqua" href="{{ url('storage/'.$article->pdf) }}" download>Descargar en PDF</a></p>
                <p class="w3-center"><a class="w3-btn w3-aqua" href="{{ url('storage/'.$article->pdf) }}">Leer PDF en linea</a></p>
            </div>
            <div class="w3-col w3-container m8 l9">
                <p><strong> {{ $article->description }} </strong></p>
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>

@endsection

