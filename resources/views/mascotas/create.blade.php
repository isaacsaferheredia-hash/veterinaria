@extends('layouts.app')

@section('titulo', 'Nueva Mascota')

@section('contenido')
    <h1>Registrar Mascota</h1>

    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre de la Mascota *</label>
            <input type="text" name="nombreMascota" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Especie *</label>
            <input type="text" name="especie" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Raza</label>
            <input type="text" name="raza" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Sexo</label>
            <input type="text" name="sexo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre Dueño</label>
            <input type="text" name="nombreDueño" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido Dueño</label>
            <input type="text" name="apellidoDueño" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" rows="3"></textarea>
        </div>

        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">
            Cancelar
        </a>
        <button type="submit" class="btn btn-primary">
            Guardar
        </button>
    </form>
@endsection
