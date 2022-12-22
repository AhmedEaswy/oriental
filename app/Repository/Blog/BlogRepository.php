<?php

namespace App\Repository\Blog;

use App\DataTables\BlogDataTable;
use App\Models\Blog;
use App\Repository\BaseRepository;

/**
 * @property-read Blog $model
 */
class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new BlogDataTable());
    }

    public function store(array $data): Blog
    {
        return $this->model->create($data);
    }

    public function update(Blog $blog, array $data): Blog
    {
        $blog->update($data);
        return $blog;
    }

    public function delete(Blog $blog): bool
    {
        return $blog->delete();
    }
}
