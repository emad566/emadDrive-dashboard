@props([
    'class'=>'sweetDelete'
])

<script>
    window.addEventListener('sweet-init', event => {
        sweetInit();
    });

    function sweetInit(){
        $('.{{ $class }}').click(function(e) {
            Swal.fire({
                title: '{{ __('Are you sure?') }}',
                text: '{{ __('You will not be able to revert this!') }}',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: '{{ __('Cancel') }}',
                confirmButtonText: '{{ __('Yes, delete it!') }}'
            }).then(function(result) {
                if (result.value) {
                    var userId = e.target.getAttribute('action-id');
                @this.destroy(userId)
                    window.addEventListener('alert-delete', function (){
                        Swal.fire(
                            '{{ __('Deleted!') }}',
                            '{{ __('Your item has been deleted.') }}',
                            'success'
                        )
                    })

                }
            });
        });
    }

    sweetInit();
</script>
