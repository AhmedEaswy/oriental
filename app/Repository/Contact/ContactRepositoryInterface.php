<?php

namespace App\Repository\Contact;

use App\Models\Contact;

interface ContactRepositoryInterface
{
    public function datatable();

    public function store(array $data): Contact;

    public function update(Contact $contact, array $data): Contact;

    public function delete(Contact $contact): bool;
}
