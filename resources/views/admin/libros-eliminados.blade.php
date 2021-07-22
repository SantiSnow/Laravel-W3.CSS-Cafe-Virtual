@extends('layouts.admin')
@section('contenido')

    <div class="w3-container">
        <h3>Libros eliminados del sistema</h3>
        <p>Desde esta sección puede ver las obras eliminadas del sistema.</p>
    </div>

    <div class="w3-container">

        <table class="w3-table w3-striped w3-border">
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Clasificación</th>
                <th>Autor</th>
                <th>Imagen</th>
                <th>Páginas</th>
                <th>Eliminar</th>
            </tr>
            @foreach($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->title }}</td>
                    <td>{{ $articulo->genre->name }}</td>
                    <td>{{ $articulo->clasification->name }}</td>
                    <td>{{ $articulo->author }}</td>
                    <td>{{ $articulo->image }}</td>
                    <td>{{ $articulo->pages }}</td>
                    <td>
                        <form action="{{ url('/restaurar-libro') }}" method="post">
                            @csrf @method('POST')
                            <input type="number" name="id" value="{{ $articulo->id }}" hidden />
                            <button type="submit" class="w3-button w3-green">Restaurar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
