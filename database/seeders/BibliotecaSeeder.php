<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Libro;

class BibliotecaSeeder extends Seeder
{
    public function run(): void
    {
        // Crear las categorias
        $categorias = [
            'Terror sobrenatural',
            'Terror psicologico',
            'Novela gotica',
            'Misterio detectivesco',
            'Suspenso psicologico'
        ];

        foreach ($categorias as $nombre) {
            Categoria::updateOrCreate(
                ['nombre' => $nombre]
            );
        }

        // Registrar los libros
        $libros = [
            [
                'titulo' => 'Dracula',
                'autor' => 'Bram Stoker',
                'anio' => 1897,
                'categoria' => 'Novela gotica',
                'disponible' => true
            ],
            [
                'titulo' => 'Frankenstein',
                'autor' => 'Mary Shelley',
                'anio' => 1818,
                'categoria' => 'Novela gotica',
                'disponible' => true
            ],
            [
                'titulo' => 'El resplandor',
                'autor' => 'Stephen King',
                'anio' => 1977,
                'categoria' => 'Terror psicologico',
                'disponible' => true
            ],
            [
                'titulo' => 'It',
                'autor' => 'Stephen King',
                'anio' => 1986,
                'categoria' => 'Terror sobrenatural',
                'disponible' => true
            ],
            [
                'titulo' => 'El exorcista',
                'autor' => 'William Peter Blatty',
                'anio' => 1971,
                'categoria' => 'Terror sobrenatural',
                'disponible' => false
            ],
            [
                'titulo' => 'El sabueso de los Baskerville',
                'autor' => 'Arthur Conan Doyle',
                'anio' => 1902,
                'categoria' => 'Misterio detectivesco',
                'disponible' => true
            ],
            [
                'titulo' => 'Asesinato en el Orient Express',
                'autor' => 'Agatha Christie',
                'anio' => 1934,
                'categoria' => 'Misterio detectivesco',
                'disponible' => true
            ],
            [
                'titulo' => 'Rebeca',
                'autor' => 'Daphne du Maurier',
                'anio' => 1938,
                'categoria' => 'Suspenso psicologico',
                'disponible' => true
            ],
            [
                'titulo' => 'El silencio de los inocentes',
                'autor' => 'Thomas Harris',
                'anio' => 1988,
                'categoria' => 'Suspenso psicologico',
                'disponible' => false
            ],
            [
                'titulo' => 'El nombre de la rosa',
                'autor' => 'Umberto Eco',
                'anio' => 1980,
                'categoria' => 'Misterio detectivesco',
                'disponible' => true
            ]
        ];

        foreach ($libros as $datos) {

            $categoria = Categoria::where(
                'nombre',
                $datos['categoria']
            )->firstOrFail();

            Libro::updateOrCreate(
                ['titulo' => $datos['titulo']],
                [
                    'autor' => $datos['autor'],
                    'anio' => $datos['anio'],
                    'categoria_id' => $categoria->id,
                    'disponible' => $datos['disponible']
                ]
            );
        }
    }
}
