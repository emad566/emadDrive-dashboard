@foreach($items->where('parent_id', 0) as $item)
    <x-snippets.checkbox-cats :allItems="$items" :item="$item"/>
    <div class="w-100 h-2" style=""></div>
@endforeach
