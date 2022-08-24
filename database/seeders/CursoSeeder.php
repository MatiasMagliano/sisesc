<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = array(
            0 => array(
                'codigo_curso' => '1A-TM',
                'nombre_curso' => '1º año "A", turno mañana'
            ),
            1 => array(
                'codigo_curso' => '2A-TM',
                'nombre_curso' => '2º año "A", turno mañana'
            ),
            2 => array(
                'codigo_curso' => '3A-TM',
                'nombre_curso' => '3º año "A", turno mañana'
            ),
            3 => array(
                'codigo_curso' => '4A-TM',
                'nombre_curso' => '4º año "A", turno mañana'
            ),
            4 => array(
                'codigo_curso' => '5A-TM',
                'nombre_curso' => '5º año "A", turno mañana'
            ),
            5 => array(
                'codigo_curso' => '6A-TM',
                'nombre_curso' => '6º año "A", turno mañana'
            ),
        );

        Curso::insert($cursos);
    }
}
