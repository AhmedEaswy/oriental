<?php

namespace App\Repository\Slider;

use App\DataTables\SliderDataTable;
use App\Models\Slider;
use App\Repository\BaseRepository;

/**
 * @property-read Slider $model
 */
class SliderRepository extends BaseRepository implements SliderRepositoryInterface
{
    public function __construct(Slider $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new SliderDataTable());
    }

    /**
     * @param array $data
     * @return Slider
     */
    public function store(array $data): Slider
    {
        return $this->model->create($data);
    }

    /**
     * @param Slider $slider
     * @param array $data
     * @return Slider
     */
    public function update(Slider $slider, array $data): Slider
    {
        $slider->update($data);
        return $slider;
    }

    /**
     * @param Slider $slider
     * @return bool
     */
    public function delete(Slider $slider): bool
    {
        return $slider->delete();
    }
}
