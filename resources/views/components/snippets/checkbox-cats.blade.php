

@if($item)
        <div class="row">
            <x-form.switch-label
                parentid="parent-{{ $item->parent_id }}"
                itemid="item-{{ $item->id }}"
                x-on:change="selectedPermissionsUpdated($el)"
                x-model="selectedPermissions"
                class="" wrapperClasses="row px-0 mb-3"
                label="{{ $item->name }} --- {{ $item->childes->count() }} [{{ $item->id }}] { {{ $item->parent_id }} }"
            >{{ $item->id }}</x-form.switch-label>
        </div>
        @if($item->childes->count()>0)
            @foreach($item->childes as $child)
            <div x-show="selectedPermissions.includes({{ $item->id }})"

                class="pl-10" style="border-{{ (session()->get('locale') == 'ar')? 'right' : 'lift'}}: solid 2px #ccc"
            >
                <x-snippets.checkbox-cats :allItems="$allItems" :item="$child"/>
            </div>
            @endforeach
            @if($item->parent && !$item->parent?->parent) <div class="row w-100 h-2" style=""></div> @endif
       @endif
@endif
