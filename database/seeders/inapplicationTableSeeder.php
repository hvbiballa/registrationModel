<?php

namespace Database\Factories;

use App\Models\Training;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Training::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'title' => $faker->sentence(5),
            'desc' => $faker->text(),
            'trainer' => $faker->name,
        ];
    }
}
