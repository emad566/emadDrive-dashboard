@if(!count($items))
    <x-table.row>
        <td colspan="5">
            <lottie-player class="m-auto" src="{{ asset('lottie\no-data.json') }}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay></lottie-player>
        </td>
    </x-table.row>
@endif
