<?php

namespace Database\Factories;

use App\Models\RegleContrat;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegleContratFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegleContrat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rce_libelle_1'=> $this->faker->word(),
            'rce_libelle_2'=> $this->faker->word(),
        ];
    }
}
