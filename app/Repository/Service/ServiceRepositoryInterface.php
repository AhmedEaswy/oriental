<?php

namespace App\Repository\Service;

use App\Models\Service;

interface ServiceRepositoryInterface
{
    public function datatable();

    public function store(array $data): Service;

    public function update(Service $service, array $data): Service;

    public function delete(Service $service): bool;
}
