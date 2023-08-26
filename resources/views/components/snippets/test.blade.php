@props([
    'd'=>0
])

<div  >{{ $d }}
    @if($d<10)
        <x-snippets.test :d="$d+1"></x-snippets.test>
    @endif
</div>
