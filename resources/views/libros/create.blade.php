
@extends('layouts.app')

@section('titulo', 'Registrar libro')

@section('contenido')

    <h2>Registrar un nuevo libro</h2>

    <form action="{{ route('libros.store') }}" method="POST">

        @csrf

        <label>Título:</label>
        <br>
        <input type="text" name="titulo" value="{{ old('titulo') }}">
        @error('titulo')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Autor:</label>
        <br>
        <input type="text" name="autor" value="{{ old('autor') }}">
        @error('autor')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Año de publicación:</label>
        <br>
        <input type="number" name="anio" min="1500" max="{{ date('Y') }}" value="{{ old('anio') }}">
        @error('anio')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Categoría:</label>
        <br>
        <select name="categoria_id">
            <option value="">Selecciona una categoría</option>

            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}"
                    {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>

        @error('categoria_id')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Disponibilidad:</label>
        <br>
        <select name="disponible">
    <option value="1" {{ old('disponible', '1') == '1' ? 'selected' : '' }}>
        Disponible
    </option>
    <option value="0" {{ old('disponible') == '0' ? 'selected' : '' }}>
        No disponible
    </option>
</select>

        @error('disponible')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Guardar libro</button>

    </form>

    <br>

    <a href="{{ route('libros.index') }}">Volver al catálogo</a>

@endsection
