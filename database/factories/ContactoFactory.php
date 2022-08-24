<?php

namespace Database\Factories;

use App\Models\Barrio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'direccion'         => $this->faker->streetName() .' '. $this->faker->buildingNumber(),
            'telefono'          => $this->faker->bothify('### #######'),
            'correo_e'          => $this->faker->safeEmail(),
            'provincia_id'      => 14,
            'localidad_id'      => 14014010000,
            'barrio_id'         => Barrio::inRandomOrder()->first()->id,
        ];
    }
}
