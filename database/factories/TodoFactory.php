<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Todo;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Todo::class;
    public function definition()
    {
        return [
            'name' =>  $faker->sentence(3),
            'description' =>  $faker->paragraph(3),
            'completed' =>  false
        ];
    }
}
