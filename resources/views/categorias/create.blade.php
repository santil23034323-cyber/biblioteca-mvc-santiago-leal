
@extends('layouts.app')

@section('titulo', 'Registrar categoría')

@section('contenido')

    <h2>Registrar nueva categoría</h2>

    <form action="{{ route('categorias.store') }}" method="POST">

        @csrf

        <label>Nombre de la categoría:</label>
        <br>

        <input
            type="text"
            name="nombre"
            value="{{ old('nombre') }}"
            placeholder="Ejemplo: Terror clásico"
        >

        @error('nombre')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Guardar categoría</button>

    </form>

    <br>

    <a href="{{ route('categorias.index') }}">Volver a categorías</a>

@endsection
