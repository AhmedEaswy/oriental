<?php

namespace App\Repository\Contact;

use App\DataTables\ContactDataTable;
use App\Models\Contact;
use App\Repository\BaseRepository;

/**
 * @property-read Contact $model
 */
class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }

    public function datatable()
    {
        return (new ContactDataTable());
    }

    /**
     * @param array $data
     * @return Contact
     */
    public function store(array $data): Contact
    {
        return $this->model->create($data);
    }

    /**
     * @param Contact $contact
     * @param array $data
     * @return Contact
     */
    public function update(Contact $contact, array $data): Contact
    {
        $contact->update($data);
        return $contact;
    }

    /**
     * @param Contact $contact
     * @return bool
     */
    public function delete(Contact $contact): bool
    {
        return $contact->delete();
    }
}
