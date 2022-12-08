<?php

namespace Database\Factories;

use App\Models\Genero;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker = Faker::create('es_ES');
        $genero = Genero::inRandomOrder()->first()->id;
        switch($genero)
        {
            case '1':
                return [
                    'dni'               => $this->faker->bothify('########'),
                    'username'    => $this->faker->firstName().$this->faker->lastName().$this->faker->bothify('-#####'),
                    'nombres'           => $this->faker->firstName('male') .' '. $this->faker->firstName('male'),
                    'apellidos'         => $this->faker->lastName(),
                    'genero_id'         => $genero,
                    'password'          => Hash::make('estudiante'),
                    'remember_token'    => Str::random(10),
                    'email_verified_at' => now(),
                    'fecha_nacimiento'  => now(),
                ];
                break;
            case '2':
                return [
                    'dni'               => $this->faker->bothify('########'),
                    'username'    => $this->faker->firstName().$this->faker->lastName().$this->faker->bothify('-#####'),
                    'nombres'           => $this->faker->firstName('female') .' '. $this->faker->firstName('female'),
                    'apellidos'         => $this->faker->lastName(),
                    'genero_id'         => $genero,
                    'password'          => Hash::make('estudiante'),
                    'remember_token'    => Str::random(10),
                    'email_verified_at' => now(),
                    'fecha_nacimiento'  => now(),
                ];
                break;
            case '3':
                return [
                    'dni'               => $this->faker->bothify('########'),
                    'username'    => $this->faker->firstName().$this->faker->lastName().$this->faker->bothify('-#####'),
                    'nombres'           => $this->faker->firstName(),
                    'apellidos'         => $this->faker->lastName(),
                    'genero_id'         => $genero,
                    'password'          => Hash::make('estudiante'),
                    'remember_token'    => Str::random(10),
                    'email_verified_at' => now(),
                    'fecha_nacimiento'  => now(),
                ];
            default: return [];
                break;
        }
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
