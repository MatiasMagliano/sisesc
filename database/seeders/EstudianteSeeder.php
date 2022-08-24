<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Familia;
use App\Models\FamiliaMiembro;
use App\Models\Matricula;
use App\Models\Padre;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        $cursos = 6;
        $estudiantes_curso = 23;
        $division = 0;

        for ($j = 1; $j <= $cursos; $j++) {
            for ($i = 0; $i < $estudiantes_curso; $i++) {
                // SE CREA UN ESTUDIANTE y sus PADRES
                $estudiante = Estudiante::factory()->create([
                    'fecha_nacimiento'  => $this->faker->dateTimeBetween('-'. 11+$j .' years', '-'. 12-$j .' years')
                ]);
                Contacto::factory()->create([
                    'contactable_id'    => $estudiante->id,
                    'contactable_type'  => Estudiante::class,
                ]);

                $padres = rand(1, 2);
                for ($k = 0; $k < $padres; $k++) {
                    $padre = Padre::factory()->create();
                    Contacto::factory()->create([
                        'contactable_id'    => $padre->id,
                        'contactable_type'  => Padre::class,
                    ]);
                    if ($k == 0) {
                        $familia = Familia::factory()->create(['jefe_id' => $padre->id]);
                    }
                    FamiliaMiembro::create([
                        'padre_id' => $padre->id,
                        'familia_id' => $familia->id,
                        'estudiante_id' => $estudiante->id,
                    ]);
                }

                Matricula::create([
                    'curso_id'      => Curso::find($j)->id,
                    'estudiante_id' => $estudiante->id,
                ]);
            }
        }
    }
}
