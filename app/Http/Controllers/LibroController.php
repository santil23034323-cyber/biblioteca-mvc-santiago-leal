<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Categoria;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    // Mostrar todos los libros
    
public function index(Request $request)
{
    $consulta = Libro::with('categoria');

    // Filtrar por categoría
    if ($request->filled('categoria_id')) {
        $consulta->where('categoria_id', $request->categoria_id);
    }

    // Buscar por título
    if ($request->filled('buscar')) {
        $consulta->where('titulo', 'like', '%' . $request->buscar . '%');
    }

    $libros = $consulta->orderBy('titulo')->get();

    // Obtener las categorías para el filtro
    $categorias = Categoria::orderBy('nombre')->get();

    return view('libros.index', compact('libros', 'categorias'));
}


    // Mostrar formulario para registrar libros
    public function create()
    {
        $categorias = Categoria::orderBy('nombre')->get();

        return view('libros.create', compact('categorias'));
    }

    // Guardar un libro nuevo
    public function store(Request $request)
    {
        $datos = $request->validate([
            'titulo' => 'required|string|min:3|max:255',
            'autor' => 'required|string|max:255',
            'anio' => 'required|integer|min:1500|max:' . date('Y'),
            'categoria_id' => 'required|exists:categorias,id',
            'disponible' => 'required|boolean',
        ]);

        Libro::create($datos);

        return redirect()->route('libros.index')
            ->with('success', '¡Libro registrado correctamente!');
    }

    // Mostrar formulario para editar un libro
    public function edit(Libro $libro)
    {
        $categorias = Categoria::orderBy('nombre')->get();

        return view('libros.edit', compact('libro', 'categorias'));
    }

    // Actualizar un libro
    public function update(Request $request, Libro $libro)
    {
        $datos = $request->validate([
            'titulo' => 'required|string|min:3|max:255',
            'autor' => 'required|string|max:255',
            'anio' => 'required|integer|min:1500|max:' . date('Y'),
            'categoria_id' => 'required|exists:categorias,id',
            'disponible' => 'required|boolean',
        ]);

        $libro->update($datos);

        return redirect()->route('libros.index')
            ->with('success', '¡Libro actualizado correctamente!');
    }
    // Eliminar un libro
public function destroy(Libro $libro)
{
    $libro->delete();

    return redirect()->route('libros.index')
        ->with('success', '¡Libro eliminado correctamente!');
}
}

