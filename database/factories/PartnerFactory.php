<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PartnerFactory extends Factory
{
  protected $model = Partner::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition(): array
  {
    return [
      'image' => $this->faker->imageUrl(),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ];
  }
}
