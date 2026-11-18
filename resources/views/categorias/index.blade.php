
@extends('layouts.app')

@section('titulo', 'Categorías')

@section('contenido')

    <h2>Nuestras categorías</h2>

    <p>Explora los diferentes géneros de nuestra biblioteca.</p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <a href="{{ route('categorias.create') }}">
        Registrar nueva categoría
    </a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Libros registrados</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nombre }}</td>

                    <td>{{ $categoria->libros_count }}</td>

                    <td>
                        <form
                            action="{{ route('categorias.destroy', $categoria->id) }}"
                            method="POST"
                            onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        No hay categorías registradas.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection

