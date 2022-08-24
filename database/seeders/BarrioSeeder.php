<?php

namespace Database\Seeders;

use App\Models\Barrio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barrios = json_decode(File::get('database/data/barrios.json'), true);

        $data = [];

        foreach($barrios as $barrio)
        {
            $data[] = [
                'id' => $barrio['id'],
                'barrio' => $barrio['barrio'],
            ];
        }

        //dd($data);

        Barrio::insert($data);
    }
}
