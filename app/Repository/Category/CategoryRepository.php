<?php

namespace App\Repository\Category;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use App\Repository\BaseRepository;

/**
 * @property-read Category $model
 */
class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new CategoryDataTable());
    }

    /**
     * @param array $data
     * @return Category
     */
    public function store(array $data): Category
    {
        return $this->model->create($data);
    }

    /**
     * @param Category $category
     * @param array $data
     * @return Category
     */
    public function update(Category $category, array $data): Category
    {
        $category->update($data);
        return $category;
    }

    /**
     * @param Category $category
     * @return bool
     */
    public function delete(Category $category): bool
    {
        return $category->delete();
    }
}
