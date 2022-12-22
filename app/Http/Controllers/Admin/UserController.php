<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repository\User\UserRepository;
use App\Repository\User\UserRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @property-read UserRepository $repository
 */
class UserController extends Controller
{
    public UserRepositoryInterface $repository;

    /**
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
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
        return $dataTable->render('admin::user.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $user = new User();
        return view('admin::user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['title' => ['required', 'string', 'min:3',], 'content' => ['required', 'string'], 'image' => ['required', 'image']]);
        $this->repository->store($validated);
        alert()->success('user', 'created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View
     */
    public function show(User $user)
    {
        return \view('admin::user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View
     */
    public function edit(User $user)
    {
        return \view('admin::user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate(['title' => ['required', 'string', 'min:3',], 'content' => ['required', 'string'], 'image' => ['required', 'image']]);
        $this->repository->update($user, $validated);
        alert()->success('user', 'updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user)
    {
        $this->repository->delete($user);
        alert()->success('user', 'deleted');
        return back();
    }
}
