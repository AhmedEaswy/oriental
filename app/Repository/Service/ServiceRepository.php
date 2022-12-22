<?php

namespace App\Repository\Service;

use App\DataTables\ServiceDataTable;
use App\Models\Service;
use App\Repository\BaseRepository;

/**
 * @property-read Service $model
 */
class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new ServiceDataTable());
    }

    /**
     * @param array $data
     * @return Service
     */
    public function store(array $data): Service
    {
        return $this->model->create($data);
    }

    /**
     * @param Service $service
     * @param array $data
     * @return Service
     */
    public function update(Service $service, array $data): Service
    {
        $service->update($data);
        return $service;
    }

    /**
     * @param Service $service
     * @return bool
     */
    public function delete(Service $service): bool
    {
        return $service->delete();
    }
}
