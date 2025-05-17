<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{

    public function definition()
    {

        protected $model = Category::class;

        return [
            'name' => $this->faker->unique()->word,
        ];
    }
}
