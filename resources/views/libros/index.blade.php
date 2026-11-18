
@extends('layouts.app')

@section('titulo', 'Libros')

@section('contenido')
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

    <h2>Catálogo de libros</h2>

    <p>Explora nuestra colección de terror, misterio y suspenso.</p>

<form action="{{ route('libros.index') }}" method="GET">

    <label>Buscar por título:</label>

    <input
        type="text"
        name="buscar"
        placeholder="Escribe el título..."
        value="{{ request('buscar') }}"
    >

    <br><br>

    <label>Filtrar por categoría:</label>

    <select name="categoria_id">
        <option value="">Todas las categorías</option>

        @foreach ($categorias as $categoria)
            <option
                value="{{ $categoria->id }}"
                {{ request('categoria_id') == $categoria->id ? 'selected' : '' }}
            >
                {{ $categoria->nombre }}
            </option>
        @endforeach

    </select>

    <br><br>

    <button type="submit">Buscar y filtrar</button>

    <a href="{{ route('libros.index') }}">Limpiar filtros</a>

</form>

<br>


    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Categoría</th>
                <th>Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->anio }}</td>
                    <td>{{ $libro->categoria->nombre }}</td>
                    <td>
                        {{ $libro->disponible ? 'Sí' : 'No' }}
                    </td>

                    <td>
                        <a href="{{ route('libros.edit', $libro->id) }}">
                            Editar
                        </a>
     <form action="{{ route('libros.destroy', $libro->id) }}"
      method="POST"
      onsubmit="return confirm('¿Estás seguro de eliminar este libro?')">

    @csrf
    @method('DELETE')

    <button type="submit">Eliminar</button>

</form>
                    </td>
                </tr>
           @empty
    <tr>
        <td colspan="6">
            @if (request('buscar') || request('categoria_id'))
                No se encontraron libros con esos filtros.
            @else
                No hay libros registrados.
            @endif
        </td>
    </tr>
@endforelse
        </tbody>
    </table>

@endsection

