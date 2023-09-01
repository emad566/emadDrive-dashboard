<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" >
        <ul class="menu-nav">
            <x-aside.link link="/" route="dashboard" title="Dashboard" iconName="fas fa-home"/>

            <!-- users -->
                <x-aside.menu title="Users" iconName="fas fa-users" route="accounts/user*">
                    <x-aside.link link="dashboard/accounts/user*" route="users.index" title="Users" iconSize="md" iconName="fas fa-users"/>
                    <x-aside.link link="dashboard/accounts/users/roles*" route="roles.index" title="Roles" iconSize="md" iconName="fas fa-key"/>
                    <x-aside.link link="dashboard/accounts/users/permission*" route="permissions.index" title="Permissions" iconSize="md" iconName="fas fa-universal-access"/>
                </x-aside.menu>
                <x-aside.menu title="Captains" iconName="fas fa-car" route="accounts/captains*">
                    <x-aside.link link="dashboard/accounts/captains" route="captains.index" title="Captains" iconSize="md" iconName="fas fa-user-alt"/>
                </x-aside.menu>
                <x-aside.menu title="Passengers" iconName="fas fa-user" route="accounts/passengers*">
                    <x-aside.link link="dashboard/accounts/passengers*" route="passengers.index" title="Passengers" iconSize="md" iconName="fas fa-user-alt"/>
                </x-aside.menu>
            <!-- /users -->

            <!-- vehicles -->
            <x-aside.menu title="Vehicles" iconName="fas fa-car" route="vehicles*">
                <x-aside.link link="dashboard/*" route="vehicles.index" title="Vehicle Class" iconSize="md" iconName="fas fa-car"/>
                <x-aside.link link="dashboard/vehicles/properties*" route="properties.index" title="Properties" iconSize="md" iconName="fas fa-universal-access"/>
            </x-aside.menu>
            <!-- /vehicles -->

            <!-- settings -->
            <x-aside.menu title="Settings" iconName="fas fa-cogs" route="settings*">
                <x-aside.link link="dashboard/settings" route="settings.index" title="Settings" iconSize="md" iconName="fas fa-cogs"/>

            </x-aside.menu>
            <!-- /settings -->
        </ul>
    </div>
</div>



