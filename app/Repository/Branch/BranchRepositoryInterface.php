<?php

namespace App\Repository\Branch;

use App\Models\Branch;

interface BranchRepositoryInterface
{
    public function datatable();

    public function store(array $data): Branch;

    public function update(Branch $branch, array $data): Branch;

    public function delete(Branch $branch): bool;
}
