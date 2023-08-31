<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" >
        <ul class="menu-nav">
            <li class="menu-item" aria-haspopup="true">
                <a href="" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="fa fas fa-home text-primary icon-lg"></i>
                    </span>
                    <span class="menu-text">{{ __('Dashboard') }}</span>
                </a>
            </li>


            <!-- users -->
            <li class="menu-item menu-item-submenu {{ request()->is('dashboard/accounts*') ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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

                        <!-- Admins -->
                        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/accounts/user*')) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <i class="fa fas fa-users text-primary icon-md"></i>
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

                                    <li class="menu-item {{ (request()->is('dashboard/accounts/user*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a wire:navigate href="{{ route('users.index') }}" class="menu-link">
                                            <span class="svg-icon menu-icon">
                                                <i class="fa fas fa-users text-primary icon-sm"></i>
                                            </span>
                                            <span class="menu-text">{{ __('Users') }}</span>
                                        </a>
                                    </li>

                                    <li class="menu-item {{ (request()->is('dashboard/accounts/users/roles*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a wire:navigate href="{{ route('roles.index') }}" class="menu-link">
                                            <span class="svg-icon menu-icon">
                                                <i class="fa fas fa-key text-primary icon-sm"></i>
                                            </span>
                                            <span class="menu-text">{{ __('Roles') }}</span>
                                        </a>
                                    </li>

                                    <li class="menu-item {{ (request()->is('dashboard/accounts/users/permission*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a wire:navigate href="{{ route('permissions.index') }}" class="menu-link">
                                            <span class="svg-icon menu-icon">
                                                <i class="fa fas fa-universal-access text-primary icon-sm"></i>
                                            </span>
                                            <span class="menu-text">{{ __('Permissions') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- /Admins -->

                        <!-- Heros -->
                        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/accounts/captains*')) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <i class="fa fas fa-car text-primary icon-md"></i>
                                </span>
                                <span class="menu-text">{{ __('Captains') }}</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">{{ __('Captains') }}</span>
                                        </span>
                                    </li>

                                    <li class="menu-item {{ (request()->is('dashboard/accounts/captains')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a wire:navigate href="{{ route('captains.index') }}" class="menu-link">
                                            <span class="svg-icon menu-icon">
                                                <i class="fa fas fa-car-alt text-primary icon-sm"></i>
                                            </span>
                                            <span class="menu-text">{{ __('Captains') }}</span>
                                        </a>
                                    </li>
                                    <li class="menu-item {{ (request()->is('dashboard/accounts/captains/properties*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a wire:navigate href="{{ route('properties.index') }}" class="menu-link">
                                            <span class="svg-icon menu-icon">
                                                <i class="fa fas fa-universal-access text-primary icon-sm"></i>
                                            </span>
                                            <span class="menu-text">{{ __('Properties') }}</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- /Heros -->

                        <!-- Passengers -->
                        <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/accounts/passengers*')) ? 'menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <i class="fa fas fa-user text-primary icon-md"></i>
                                </span>
                                <span class="menu-text">{{ __('Passengers') }}</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">{{ __('Passengers') }}</span>
                                        </span>
                                    </li>

                                    <li class="menu-item {{ (request()->is('dashboard/accounts/passengers*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                        <a wire:navigate href="{{ route('passengers.index') }}" class="menu-link">
                                            <span class="svg-icon menu-icon">
                                                <i class="fa fas fa-user-alt text-primary icon-sm"></i>
                                            </span>
                                            <span class="menu-text">{{ __('Passengers') }}</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <!-- /Passengers -->

                    </ul>
                </div>
            </li>
            <!-- /users -->
        </ul>
    </div>
</div>

