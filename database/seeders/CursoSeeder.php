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
                'curso'        => 1,
                'codigo_curso' => '1A-TM',
                'nombre_curso' => '1º año "A", turno mañana'
            ),
            1 => array(
                'curso'        => 2,
                'codigo_curso' => '2A-TM',
                'nombre_curso' => '2º año "A", turno mañana'
            ),
            2 => array(
                'curso'        => 3,
                'codigo_curso' => '3A-TM',
                'nombre_curso' => '3º año "A", turno mañana'
            ),
            3 => array(
                'curso'        => 4,
                'codigo_curso' => '4A-TM',
                'nombre_curso' => '4º año "A", turno mañana'
            ),
            4 => array(
                'curso'        => 5,
                'codigo_curso' => '5A-TM',
                'nombre_curso' => '5º año "A", turno mañana'
            ),
            5 => array(
                'curso'        => 6,
                'codigo_curso' => '6A-TM',
                'nombre_curso' => '6º año "A", turno mañana'
            ),
            6 => array(
                'curso'        => 1,
                'codigo_curso' => '1A-TT',
                'nombre_curso' => '1º año "A", turno tarde'
            ),
            7 => array(
                'curso'        => 2,
                'codigo_curso' => '2A-TT',
                'nombre_curso' => '2º año "A", turno tarde'
            ),
            8 => array(
                'curso'        => 3,
                'codigo_curso' => '3A-TT',
                'nombre_curso' => '3º año "A", turno tarde'
            ),
            9 => array(
                'curso'        => 4,
                'codigo_curso' => '4A-TT',
                'nombre_curso' => '4º año "A", turno tarde'
            ),
            10 => array(
                'curso'        => 5,
                'codigo_curso' => '5A-TT',
                'nombre_curso' => '5º año "A", turno tarde'
            ),
            11 => array(
                'curso'        => 6,
                'codigo_curso' => '6A-TT',
                'nombre_curso' => '6º año "A", turno tarde'
            ),
        );

        Curso::insert($cursos);
    }
}
