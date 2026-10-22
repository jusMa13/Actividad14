<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use App\Models\Receta;
use Illuminate\Database\Seeder;

class RecetaSeeder extends Seeder
{
    public function run(): void
    {
        // Instancia de la clase Receta
        $receta = Receta::create([
            'titulo'        => 'Gallo pinto',
            'porciones'     => 4,
            'instrucciones' => 'Sofreír la cebolla y el chile en aceite, agregar los frijoles con un poco de su caldo, incorporar el arroz y mezclar bien. Terminar con el culantro picado.',
        ]);

        
        $arroz    = Ingrediente::create(['nombre' => 'arroz']);
        $frijoles = Ingrediente::create(['nombre' => 'frijoles cocidos']);
        $cebolla  = Ingrediente::create(['nombre' => 'cebolla']);
        $chile    = Ingrediente::create(['nombre' => 'chile dulce']);
        $culantro = Ingrediente::create(['nombre' => 'culantro']);
        $aceite   = Ingrediente::create(['nombre' => 'aceite']);

        // Relación con cantidad y unidad de medida
        $receta->ingredientes()->attach($arroz->id,    ['cantidad' => 2,   'unidad_medida' => 'tazas']);
        $receta->ingredientes()->attach($frijoles->id, ['cantidad' => 1.5, 'unidad_medida' => 'tazas']);
        $receta->ingredientes()->attach($cebolla->id,  ['cantidad' => 1,   'unidad_medida' => 'unidad']);
        $receta->ingredientes()->attach($chile->id,    ['cantidad' => 0.5, 'unidad_medida' => 'unidad']);
        $receta->ingredientes()->attach($culantro->id, ['cantidad' => 2,   'unidad_medida' => 'cucharadas']);
        $receta->ingredientes()->attach($aceite->id,   ['cantidad' => 2,   'unidad_medida' => 'cucharadas']);
    }
}
