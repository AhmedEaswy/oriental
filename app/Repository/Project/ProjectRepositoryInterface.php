<?php

namespace App\Repository\Project;

use App\DataTables\ProjectDataTable;
use App\Models\Project;

interface ProjectRepositoryInterface
{
    public function datatable(): ProjectDataTable;

    public function store(array $data): Project;

    public function update(Project $project, array $data): Project;

    public function delete(Project $project): bool;
}
