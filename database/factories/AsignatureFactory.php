<?php

namespace Database\Factories;

use App\Models\Asignature;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => 1,
        ];
    }
}
