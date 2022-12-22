<?php

namespace App\Repository\Slider;

use App\Models\Slider;

interface SliderRepositoryInterface
{
    public function datatable();

    public function store(array $data): Slider;

    public function update(Slider $slider, array $data): Slider;

    public function delete(Slider $slider): bool;
}
