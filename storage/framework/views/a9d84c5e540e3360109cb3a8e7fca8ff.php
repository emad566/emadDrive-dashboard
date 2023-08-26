<div id="kt_header" class="header header-fixed">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

        </div>
        <div class="topbar">
            <?php $locale = session()->get('locale'); ?>
            <?php if($locale == null): ?>
                <?php $locale = 'en' ?>
            <?php endif; ?>
            <div class="dropdown">
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <?php switch($locale):
                            case ('ar'): ?>
                                <span class="symbol symbol-20 mr-3">
                        <img src="<?php echo e(asset('dashboard-assets/media/svg/flags/008-saudi-arabia.svg')); ?>" alt="">
                    </span>
                                <?php break; ?>
                            <?php default: ?>
                                <span class="symbol symbol-20 mr-3">
                        <img src="<?php echo e(asset('dashboard-assets/media/svg/flags/226-united-states.svg')); ?>" alt="" />
                    </span>
                        <?php endswitch; ?>

                    </div>
                </div>

                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <ul class="navi navi-hover py-4">
                        <li class="navi-item">
                            <a href="<?php echo e(route('lang', 'en')); ?>" class="navi-link">
                            <span class="symbol symbol-20 mr-3">
                                <img src="<?php echo e(asset('dashboard-assets/media/svg/flags/226-united-states.svg')); ?>" alt="" />
                            </span>
                                <span class="navi-text"><?php echo e(__('English')); ?></span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="<?php echo e(route('lang', 'ar')); ?>" class="navi-link">
                            <span class="symbol symbol-20 mr-3">
                                <img src="<?php echo e(asset('dashboard-assets/media/svg/flags/008-saudi-arabia.svg')); ?>" alt="" />
                            </span>
                                <span class="navi-text"><?php echo e(__('Arabic')); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"><?php echo e(__("Hi")); ?>,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo e(Auth::user()->name); ?></span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                    <span class="symbol-label font-size-h5 font-weight-bold"><?php echo e(substr(Auth::user()->name,0,1)); ?></span>
                </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/dashboard/partials/_header.blade.php ENDPATH**/ ?>