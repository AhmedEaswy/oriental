<?php

namespace Database\Factories;

use App\Dto\GallaryDTO;
use App\Models\Branch;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
      for ($i=0; $i < 4; $i++) {
        $data[] =  GallaryDTO::fromModel($this->faker->imageUrl());
      }
        return [
            'title' => ['ar' => $this->faker->word(), 'en' => $this->faker->word()],
            'content' => ['ar' => $this->faker->word(), 'en' => $this->faker->word()],
            'image' => $this->faker->imageUrl(),
            'gallary' => json_encode($data),
            'branch_id' => Branch::factory(),
            'type' => rand(0, 1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
