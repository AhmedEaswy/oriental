<x-admin.layout.master>
    <x-slot name="css">
        @include('admin::datatables_styles')
    </x-slot>
    <x-slot name="js">
        @include('admin::datatables_scripts')

        {{ $dataTable->scripts() }}
    </x-slot>
    <div class="card my-2">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</x-admin.layout.master>
