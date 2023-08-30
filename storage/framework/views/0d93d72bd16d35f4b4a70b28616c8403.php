
<head>
    <meta charset="utf-8" />
    <title><?php echo e($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/lightbox/css/lightbox.min.css')); ?>">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="<?php echo e(asset('dashboard-assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo e(asset('dashboard-assets/media/logos/favicon.ico')); ?>" />

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<style>
    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background:url("<?php echo e(asset('assets/icons/spinner.gif')); ?>") no-repeat center center rgba(0, 0, 0, 0.25)
    }
</style>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/layouts/partials/_head-en.blade.php ENDPATH**/ ?>