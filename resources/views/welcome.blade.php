@extends('layouts.base')
<head>
    <style>
        .word-break{
            word-break: break-all;
        }
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

    </style>
</head>
@section('contenido')

    <div class="w3-main w3-content w3-padding" id="contenido">
        <div class="w3-row-padding w3-padding-16 w3-center">
            @foreach($articles as $article)
                <div class="w3-quarter">
                    <img src="" alt="" class="preview">
                    <h3>{{ $article->title  }}</h3>
                    <p class="word-break">{{ $article->description  }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="w3-display-container">
        <div class="w3-row">
            <div class="w3-third w3-display-topmiddle">
                {{ $articles->links() }}
            </div>
        </div>
    </div>


@endsection
