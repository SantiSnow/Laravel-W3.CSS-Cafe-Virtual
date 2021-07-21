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
            <form method="POST" action="{{ route('register') }}" class="w3-container w3-card-4 w3-light-grey" id="loginForm">
                <h2>Registro</h2>
                @csrf

                <label for="email">Nombre</label>
                <input class="w3-input w3-border"  type="text" name="name" placeholder="Ingrese su nombre" required />

                <br />
                <label for="email">Correo electrónico</label>
                <input class="w3-input w3-border"  type="email" name="email" placeholder="Ingrese su email" required />

                <br />
                <label for="password">Contraseña (mínimo 8 caracteres)</label>
                <input class="w3-input w3-border" type="password" name="password" minlength="8" placeholder="Ingrese su contraseña" required />
                @if(isset($caracteresMinimos))
                    <span style="color: red;">{{ $caracteresMinimos }}</span><br>
                @endif

                <br />
                <label for="Rpassword">Repertir Contraseña</label>
                <input class="w3-input w3-border" type="password" name="Rpassword" placeholder="Repita la contraseña" required />
                @if(isset($error))
                    <span style="color: red;">{{ $error }}</span><br>
                @endif

                <br />
                <button type="submit" class="w3-button w3-black w3-round-small">Ingresar</button>
                <br />
                <br />
                <a href="{{ url('/login') }}"><small>¿Ya posee cuenta?</small></a>
            </form>
        </div>
    </div>
    
@endsection
