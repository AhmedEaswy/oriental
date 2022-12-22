<?php

namespace App\Repository\Blog;

use App\Models\Blog;

interface BlogRepositoryInterface
{
    public function datatable();

    public function store(array $data): Blog;

    public function update(Blog $blog, array $data): Blog;

    public function delete(Blog $blog): bool;
}
