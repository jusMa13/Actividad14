<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = ['titulo', 'porciones', 'instrucciones'];

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'receta_ingrediente')
                    ->withPivot('cantidad', 'unidad_medida');
    }
}
