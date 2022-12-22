<?php

namespace App\Http\Controllers\Admin;

use App\Dto\GallaryDTO;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Repository\Project\ProjectRepository;
use App\Repository\Project\ProjectRepositoryInterface;
use Faker\Core\File;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

/**
 * @property-read ProjectRepository $repository
 */
class ProjectController extends Controller
{
    public ProjectRepositoryInterface $repository;

    /**
     * @param ProjectRepositoryInterface $repository
     */
    public function __construct(ProjectRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $dataTable = $this->repository->datatable();
        return $dataTable->render('admin::project.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $project = new Project();
        return view('admin::project.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string'],
        ]);
        //------------------------------------------

        $this->repository->store($validated);
        alert()->success('project', 'created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Application|Factory|View
     */
    public function show(Project $project)
    {
        return \view('admin::project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Application|Factory|View
     */
    public function edit(Project $project)
    {
        return \view('admin::project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string',],
        ]);

        $this->repository->update($project, $validated);
        alert()->success('project', 'updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return RedirectResponse
     */
    public function destroy(Project $project)
    {
        $this->repository->delete($project);
        alert()->success('project', 'deleted');
        return back();
    }
}
