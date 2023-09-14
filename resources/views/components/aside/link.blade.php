@props([
    'link'=>'',
    'route'=>'',
    'iconName'=>'',
    'iconSize'=>'lg',
    'title'=>'',
])


<li class="menu-item {{ (request()->is($link)) ? 'menu-item-active' : '' }}" aria-haspopup="true">
    <a wire:navigate href="{{ route($route) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="{{$iconName}} text-primary icon-{{$iconSize}}"></i>
                    </span>
        <span class="menu-text">{{ __($title) }}</span>
    </a>
</li>

