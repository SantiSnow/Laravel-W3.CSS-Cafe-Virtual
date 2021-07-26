@extends('layouts.admin')
<style>
</style>
@section('contenido')

    <div class="w3-container">
        <h3>Libros</h3>
    </div>

    <div class="w3-container">

        <table class="w3-table w3-striped w3-border">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Eliminar</th>
            </tr>
            @foreach($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>{{ $genre->description }}</td>
                    <td>
                        <form action="{{ url('/eliminar-genero') }}" method="post">
                            @csrf @method('DELETE')
                            <input type="number" name="id" value="{{ $genre->id }}" hidden />
                            <button type="submit" class="w3-button w3-red">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
