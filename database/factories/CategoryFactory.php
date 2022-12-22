<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => ['ar' => $this->faker->word(), 'en' => $this->faker->word()],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}