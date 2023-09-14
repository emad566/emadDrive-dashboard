@props([
    'route'=>'',
    'iconName'=>'',
    'iconSize'=>'lg',
    'title'=>'',
])


<li class="menu-item menu-item-submenu {{ request()->is('dashboard/'.$route) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <i class="{{$iconName}} text-primary icon-{{$iconSize}}"></i>
                    </span>
        <span class="menu-text">{{ __($title) }}</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">{{$slot}}</ul>
    </div>
</li>
