<?php

namespace App\Repository\Project;

use App\DataTables\ProjectDataTable;
use App\Models\Project;
use App\Repository\BaseRepository;

/**
 * @property-read Project $model
 */
class ProjectRepository extends BaseRepository implements ProjectRepositoryInterface
{
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }

    /**
     * @return ProjectDataTable
     */
    public function datatable(): ProjectDataTable
    {
        return (new ProjectDataTable());
    }

    /**
     * @param array $data
     * @return Project
     */
    public function store(array $data): Project
    {
        return tap($this->model->create($data), function ($project) use ($data) {
            if (isset($data['categories']) && $data['categories']) $project->categories()->sync($data['categories']);
        });
    }

    /**
     * @param Project $project
     * @param array $data
     * @return Project
     */
    public function update(Project $project, array $data): Project
    {
        $project->update($data);
        if (isset($data['categories']) && $data['categories']) $project->categories()->sync($data['categories']);
        return $project;
    }

    /**
     * @param Project $project
     * @return bool
     */
    public function delete(Project $project): bool
    {
      // if(\File::exists(public_path($project->image))){
      //   \File::delete(public_path($project->image));
      // }

      //   foreach (json_decode($project->gallary) as  $obj) {
      //    if(\File::exists(public_path($obj->path))){
      //      \File::delete(public_path($obj->path));
      //     }
      //  }

     if(\File::exists(public_path('/images/project_'.$project->title_en))){
        \File::deleteDirectory(public_path('/images/project_'.$project->title_en));
      }

        return $project->delete();
    }
}
