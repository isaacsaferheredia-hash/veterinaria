@extends('layouts.app')

@section('titulo', 'Editar Mascota')

@section('contenido')
    <h1>Editar Mascota</h1>

    <form action="{{ route('mascotas.update', $mascota) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nombre de la Mascota *</label>
            <input type="text" name="nombreMascota" class="form-control"
                   value="{{ $mascota->nombreMascota }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Especie *</label>
            <input type="text" name="especie" class="form-control"
                   value="{{ $mascota->especie }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Raza</label>
            <input type="text" name="raza" class="form-control"
                   value="{{ $mascota->raza }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control"
                   value="{{ $mascota->edad }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Sexo</label>
            <input type="text" name="sexo" class="form-control"
                   value="{{ $mascota->sexo }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre del Dueño</label>
            <input type="text" name="nombreDueño" class="form-control"
                   value="{{ $mascota->nombreDueño }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido del Dueño</label>
            <input type="text" name="apellidoDueño" class="form-control"
                   value="{{ $mascota->apellidoDueño }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control"
                   value="{{ $mascota->telefono }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" rows="3">{{ $mascota->observaciones }}</textarea>
        </div>

        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">
            Cancelar
        </a>
        <button type="submit" class="btn btn-primary">
            Actualizar
        </button>
    </form>
@endsection
