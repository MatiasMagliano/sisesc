<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\Curso;
use App\Models\CursoMateria;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\PlantaDocente;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias = 11; // once materias por curso

        foreach(Curso::all() as $curso)
        {
            for ($k = 0; $k < $materias; $k++) {
                // SE TOMA UNA MATERIA
                $materia = Materia::inRandomOrder()->first();

                // SE CREA DOCENTE
                $docente = Docente::factory()->create();
                Contacto::factory()->create([
                    'contactable_id'    => $docente->id,
                    'contactable_type'  => Docente::class,
                ]);

                // SE CREA RELACIÓN docente-materia
                PlantaDocente::create([
                    'docente_id'    => $docente->id,
                    'materia_id'      => $materia->id
                ]);

                // SE CREA RELACIÓN curso-materia
                CursoMateria::create([
                    'materia_id'    => $materia->id,
                    'curso_id'      => $curso->id,
                    'docente_id'    => $docente->id
                ]);
            }
        }
    }
}
