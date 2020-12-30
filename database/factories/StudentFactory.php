<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'apellidoP' => $this->faker->name,
            'apellidoM' => $this->faker->name,
            'sexo' => $this->faker->name,
            'run' => $this->faker->name,

        ];
    }
}
