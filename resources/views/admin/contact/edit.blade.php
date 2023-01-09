<x-admin.layout.master>
  <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <p><span class="font-weight-bold">ID: </span> {{ $contact->id }}</p>
              <p><span class="font-weight-bold">Name: </span> {{ $contact->name }}</p>
              <p><span class="font-weight-bold">Email: </span> {{ $contact->email }}</p>
              <p><span class="font-weight-bold">Phone: </span> {{ $contact->phone }}</p>
              <p><span class="font-weight-bold">Phone Code: </span> {{ $contact->phone_code }}</p>
              <p><span class="font-weight-bold">interest: </span> {{ $contact->interest }}</p>
              <p><span class="font-weight-bold">Date: </span> {{ $contact->created_at }}</p>
              <p><span class="font-weight-bold">Message: </span> {{ $contact->content }}</p>
            </div>
          </div>
        </div>
    </div>
</x-admin.layout.master>
