{{ Form::open(['route'=>['dashboard.contact.destroy',$model],'id'=>'contactsDelete'.$model->id,'method'=>'DELETE']) }}
{{ Form::close() }}
<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    function deleteItem(id) {
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
                // swalWithBootstrapButtons.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
<button type="button" onclick="deleteItem('contactsDelete{{$model->id}}')" class="btn btn-sm btn-danger"><i
        class="fa fa-trash"></i> delete
</button>
<a href="{{ route('dashboard.contact.edit',$model) }}" class="btn btn-sm btn-warning">
    edit
    <i class="fa fa-pen"></i>
</a>
