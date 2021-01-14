<?php

namespace Database\Factories;

use App\Models\Magasin;
use Illuminate\Database\Eloquent\Factories\Factory;

class MagasinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Magasin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'annee' => 2020,
            'name' => $this->faker->company(),
            'adr_ville' => $this->faker->address(), 
            'ens_code' => 'TN',
            'mag_siret' => $this->faker->numberBetween($min = 1000000000000, $max = 9999999999999),
            'mag_siren' => $this->faker->numberBetween($min = 1000000000000, $max = 9999999999999),
        ];
    }
}
