<?php

namespace Database\Factories;

use App\Dto\GallaryDTO;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

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
            'title' => $this->faker->word(),
        ];
    }
}
