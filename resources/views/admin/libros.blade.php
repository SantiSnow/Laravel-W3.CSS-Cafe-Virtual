@extends('layouts.admin')
<style>
</style>
@section('contenido')

    <div class="w3-container">
        <h3>Libros</h3>
    </div>

    <div class="w3-container">
        <div class="w3-row">
            <div class="w3-half">
                <form action="{{ url('/nuevoLibro') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Título</label>
                    <input class="w3-input w3-border"  type="text" name="title" placeholder="Ingrese el título" required />
                    <br />

                    <label for="author">Autor</label>
                    <input class="w3-input w3-border"  type="text" name="author" placeholder="Ingrese el autor" required />
                    <br />

                    <label for="pages">Páginas</label>
                    <input class="w3-input w3-border"  type="text" name="pages" placeholder="Ingrese páginas" required />
                    <br />

                    <label for="description">Descripción</label>
                    <input class="w3-input w3-border"  type="text" name="description" placeholder="Ingrese descripción" required />
                    <br />

                    <label for="clasification_id">Clasificación</label>
                    <select name="clasification_id" class="w3-select w3-border">
                        <option value="" disabled selected>Seleccione la opción</option>
                        @foreach($clasif as $clas)
                        <option value="{{ $clas->id }}">{{ $clas->name }}</option>
                        @endforeach
                    </select>
                    <br /><br />
                    
                    <label for="genre_id">Género</label>
                    <select name="genre_id" class="w3-select w3-border">
                        <option value="" disabled selected>Seleccione la opción</option>
                        <option value="1">Electrónica</option>
                        <option value="2">Cocina</option>
                        <option value="3">Música</option>
                        <option value="4">Historia</option>
                    </select>
                    <br /><br />

                    <label for="content">Contenido</label>
                    <textarea class="w3-input w3-border"  type="text" name="content" required></textarea>
                    <br />

                    <label for="image">Imagen de portada</label>
                    <input class="w3-input w3-border" type="file" name="image" required />
                    <br />

                    <label for="pdf">PDF</label>
                    <input class="w3-input w3-border" type="file" name="pdf" required />
                    <br />

                    <button type="submit" class="w3-button w3-green">Crear</button>
                </form>
            </div>
        </div>
    </div>

    <br><br>

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
                        <form action="{{ url('/eliminar-libro') }}" method="post">
                            @csrf @method('DELETE')
                            <input type="number" name="id" value="{{ $articulo->id }}" hidden />
                            <button type="submit" class="w3-button w3-red">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
