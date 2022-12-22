<?php

namespace App\Repository\Partner;

use App\DataTables\PartnerDataTable;
use App\Models\Partner;
use App\Repository\BaseRepository;

/**
 * @property-read Partner $model
 */
class PartnerRepository extends BaseRepository implements PartnerRepositoryInterface
{
    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new PartnerDataTable());
    }

    public function store(array $data): Partner
    {
        return $this->model->create($data);
    }

    public function update(Partner $partner, array $data): Partner
    {
        $partner->update($data);
        return $partner;
    }

    public function delete(Partner $partner): bool
    {
        return $partner->delete();
    }
}
