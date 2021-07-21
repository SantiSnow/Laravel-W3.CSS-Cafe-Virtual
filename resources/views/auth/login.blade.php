@extends('layouts.base')

<style>
    #form-login-row{
        margin-top: 10%;
    }
    #loginForm{
        padding: 5%;
        padding-top: 2%;
        padding-bottom: 2%;
    }
    .w3-card-4{
        width: 50%;
        margin: auto;
    }
</style>

@section('contenido')

    <div class="w3-row" id="form-login-row">
        <div class="w3-col" style="width:100%">
            <form method="POST" action="{{ route('login') }}" class="w3-container w3-card-4 w3-light-grey" id="loginForm">
                <h2>Ingresar</h2>
                @csrf
                <label for="email">Correo electrónico</label>
                <input class="w3-input w3-border"  type="email" name="email" placeholder="Ingrese su email" required />

                <br />
                <label for="password">Contraseña</label>
                <input class="w3-input w3-border" type="password" name="password" placeholder="Ingrese su contraseña" required />

                <br />
                <button type="submit" class="w3-button w3-black w3-round-small">Ingresar</button>
                <br />
                <br />
                <a href="{{ url('/register') }}"><small>¿Necesita registrarse?</small></a>
            </form>
        </div>
    </div>
    
@endsection
