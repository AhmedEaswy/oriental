<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SliderFactory extends Factory
{
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => ['ar' => $this->faker->word(), 'en' => $this->faker->word()],
            'content' => ['ar' => $this->faker->word(), 'en' => $this->faker->word()],
            'image' => $this->faker->imageUrl(),
//            'url' => $this->faker->url(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
