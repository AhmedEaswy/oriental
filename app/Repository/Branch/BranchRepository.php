<?php

namespace App\Repository\Branch;

use App\DataTables\BranchDataTable;
use App\Models\Branch;
use App\Repository\BaseRepository;

/**
 * @property-read Branch $model
 */
class BranchRepository extends BaseRepository implements BranchRepositoryInterface
{
    public function __construct(Branch $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new BranchDataTable());
    }

    /**
     * @param array $data
     * @return Branch
     */
    public function store(array $data): Branch
    {
        return $this->model->create($data);
    }

    /**
     * @param Branch $branch
     * @param array $data
     * @return Branch
     */
    public function update(Branch $branch, array $data): Branch
    {
        $branch->update($data);
        return $branch;
    }

    /**
     * @param Branch $branch
     * @return bool
     */
    public function delete(Branch $branch): bool
    {
        return $branch->delete();
    }
}
