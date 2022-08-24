<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(BarrioSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(DocenteSeeder::class);
    }
}
