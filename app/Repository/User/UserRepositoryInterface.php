<?php

namespace App\Repository\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function datatable();

    public function store(array $data): User;

    public function update(User $user, array $data): User;

    public function delete(User $user): bool;
}
