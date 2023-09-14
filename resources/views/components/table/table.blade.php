<div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg" x-data="{
    sweetDelete(id){
        Swal.fire({
            title: '{{ __('Are you sure?') }}',
            text: '{{ __('You will not be able to revert this!') }}',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: '{{ __('Cancel') }}',
            confirmButtonText: '{{ __('Yes, delete it!') }}'
        }).then(function(result) {
            if (result.value) {
                @this.destroy(id)
                window.addEventListener('alert-delete', function (){
                    Swal.fire(
                        '{{ __('Deleted!') }}',
                        '{{ __('Your item has been deleted.') }}',
                        'success'
                    )
                })

            }
        });
    }
}">
    <table class="table min-w-full divide-y divide-cool-gray-200">
        <thead class="thead-dark">
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-cool-gray-200">
        {{ $body }}
        </tbody>
    </table>
</div>


<style>
    nav[role="navigation"] .select-none{
        background-color: #0a53be !important;
        color: white !important;
    }
</style>
