<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            [
                'genero' => 'Masculino'
            ],
            [
                'genero' => 'Femenino'
            ],
            [
                'genero' => 'Sin definir'
            ],
        ];

        foreach ($generos as $genero)
        {
            Genero::create($genero);
        }
    }
}
