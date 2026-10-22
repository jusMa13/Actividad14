<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecetaIngrediente extends Pivot
{
    protected $table = 'receta_ingrediente';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['receta_id', 'ingrediente_id', 'cantidad', 'unidad_medida'];
}
