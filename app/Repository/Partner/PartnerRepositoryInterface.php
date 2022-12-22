<?php

namespace App\Repository\Partner;

use App\Models\Partner;

interface PartnerRepositoryInterface
{
    public function datatable();

    public function store(array $data): Partner;

    public function update(Partner $partner, array $data): Partner;

    public function delete(Partner $partner): bool;
}
