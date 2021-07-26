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
                <th>Email</th>
                <th>Rol</th>
                <th>Eliminar</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <form action="{{ url('/eliminar-user') }}" method="post">
                            @csrf @method('DELETE')
                            <input type="number" name="id" value="{{ $user->id }}" hidden />
                            <button type="submit" class="w3-button w3-red">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
