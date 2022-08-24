<?php

namespace Database\Factories;

use App\Models\Genero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Padre>
 */
class PadreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genero = Genero::inRandomOrder()->first()->id;
        switch($genero)
        {
            case '1':
                return [
                    'dni'               => $this->faker->bothify('########'),
                    'nombres'           => $this->faker->firstName('male'),
                    'apellidos'         => $this->faker->lastName(),
                    'fecha_nacimiento'  => $this->faker->dateTimeBetween('-40 years', '-30 years'),
                    'genero_id'         => $genero,
                ];
                break;
            case '2':
                return [
                    'dni'               => $this->faker->bothify('########'),
                    'nombres'           => $this->faker->firstName('female'),
                    'apellidos'         => $this->faker->lastName(),
                    'fecha_nacimiento'  => $this->faker->dateTimeBetween('-40 years', '-30 years'),
                    'genero_id'         => $genero,
                ];
                break;
            case '3':
                return [
                    'dni'               => $this->faker->bothify('########'),
                    'nombres'           => $this->faker->firstName(),
                    'apellidos'         => $this->faker->lastName(),
                    'fecha_nacimiento'  => $this->faker->dateTimeBetween('-40 years', '-30 years'),
                    'genero_id'         => $genero,
                ];
            default: return [];
                break;
        }
    }
}
