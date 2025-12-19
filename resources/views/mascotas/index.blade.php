@extends('layouts.app')

@section('titulo', 'Mascotas')

@section('contenido')

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="m-0">Mascotas</h1>
            <a href="{{ route('mascotas.create') }}" class="btn btn-primary">Nuevo</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre de la Mascota</th>
                <th>raza</th>
                <th>especie</th>
                <th>edad</th>
                <th>ingreso</th>
                <th>Nombre del Dueño</th>
                <th>Apellido del Dueño</th>
                <th>telefono</th>
                <th class="text-end">Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombreMascota }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->created_at }}</td>
                    <td>{{ $mascota->nombreDueño }}</td>
                    <td>{{ $mascota->apellidoDueño }}</td>
                    <td>{{ $mascota->telefono }}</td>

                    <td class="text-end">
                        <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('mascotas.destroy', $mascota->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que deseas eliminar?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
