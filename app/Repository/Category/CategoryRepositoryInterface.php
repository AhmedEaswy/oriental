<?php

namespace App\Repository\Category;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function datatable();

    public function store(array $data): Category;

    public function update(Category $category, array $data): Category;

    public function delete(Category $category): bool;
}
