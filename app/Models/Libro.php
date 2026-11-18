<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'anio',
        'categoria_id',
        'disponible'
    ];

    protected function casts(): array
    {
        return [
            'anio' => 'integer',
            'disponible' => 'boolean',
        ];
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}