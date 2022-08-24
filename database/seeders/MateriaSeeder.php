<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias = json_decode(File::get('database/data/padron_materias.json'), true);

        $data = [];

        foreach($materias as $materia)
        {
            $data[] = [
                'codigo_junta' => $materia['codigo_junta'],
                'nombre_materia' => $materia['nombre_materia'],
            ];
        }

        //dd($data);

        Materia::insert($data);
    }
}
