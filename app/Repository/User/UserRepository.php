<?php

namespace App\Repository\User;

use App\DataTables\UserDataTable;
use App\Models\User;
use App\Repository\BaseRepository;

/**
 * @property-read User $model
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new UserDataTable());
    }

    /**
     * @param array $data
     * @return User
     */
    public function store(array $data): User
    {
        return $this->model->create($data);
    }

    /**
     * @param User $user
     * @param array $data
     * @return User
     */
    public function update(User $user, array $data): User
    {
        $user->update($data);
        return $user;
    }

    /**
     * @param User $user
     * @return bool
     */
    public function delete(User $user): bool
    {
        return $user->delete();
    }
}
