<?php

namespace Database\Factories;

use App\Models\Objective;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objective::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'general'  => $this->faker->sentence(),
            'specific' => $this->faker->sentence()
        ];
    }
}
