<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" >
        <ul class="menu-nav">
            <li class="menu-item menu-item-active" aria-haspopup="true">
                <a href="" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="fa fas fa-home text-primary icon-lg"></i>
                    </span>
                    <span class="menu-text">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <i class="fa fas fa-users text-primary icon-lg"></i>
                    </span>
                    <span class="menu-text">{{ __('Users') }}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">{{ __('Users') }}</span>
                            </span>
                        </li>

                        <li class="menu-item" aria-haspopup="true">
                            <a href="" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{ __('Users') }}</span>
                            </a>
                        </li>

                        @can('display roles')
                            <li class="menu-item" aria-haspopup="true">
                                <a href="" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ __('Roles') }}</span>
                                </a>
                            </li>
                        @endcan

                        <li class="menu-item" aria-haspopup="true">
                            <a href="" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{ __('Permissions') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>


