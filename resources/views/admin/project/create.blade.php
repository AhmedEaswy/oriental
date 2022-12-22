<x-admin.layout.master>
    <div class="card">
        <div class="card-body">
            @include('admin::error')
            {!! Form::model($project,['route'=>'dashboard.project.store','method'=>'post','files'=>true]) !!}
            @include('admin::project.fields')
            <hr>
            <div class="p-1">
                <button class="btn btn-sm btn-primary">save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</x-admin.layout.master>