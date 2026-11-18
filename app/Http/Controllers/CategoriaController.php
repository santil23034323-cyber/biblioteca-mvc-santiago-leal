<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Mostrar todas las categorías
    public function index()
    {
        $categorias = Categoria::withCount('libros')
            ->orderBy('nombre')
            ->get();

        return view('categorias.index', compact('categorias'));
    }

    // Mostrar formulario para crear categorías
    public function create()
    {
        return view('categorias.create');
    }

    // Guardar una categoría nueva
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255|unique:categorias,nombre',
        ]);

        Categoria::create($datos);

        return redirect()->route('categorias.index')
            ->with('success', '¡Categoría registrada correctamente!');
    }

    // Eliminar una categoría
    public function destroy(Categoria $categoria)
    {
        if ($categoria->libros()->exists()) {
            return redirect()->route('categorias.index')
                ->with('error', 'No puedes eliminar una categoría que tiene libros asociados.');
        }

        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', '¡Categoría eliminada correctamente!');
    }
}
