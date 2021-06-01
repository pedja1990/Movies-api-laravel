<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->name(15),
            'director' => $this->faker->name(15),
            'imageURL'=> Str::random(30),
            'duration' =>$this->faker->time(30),
            'releaseDate' =>$this->faker->date(),
            'genre' =>$this->faker->name(15),
        ];
    }
}
