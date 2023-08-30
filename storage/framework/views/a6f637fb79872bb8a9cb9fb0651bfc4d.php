
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>AtmoDrive | <?php echo e($title); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="<?php echo e(asset('dashboard-assets/plugins/global/plugins.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/style.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/header/base/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/header/menu/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/brand/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard-assets/css/themes/layout/aside/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo e(asset('dashboard-assets/media/logos/favicon.ico')); ?>" />
    <script src="<?php echo e(asset('assets/lightbox/js/lightbox-plus-jquery.min.js')); ?>"></script>

    
    <script defer src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/select2.min.css')); ?>">
    

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">

    <style>
        body, html {
            font-family: 'Cairo', sans-serif;
        }
    </style>
    

</head>
<?php echo $__env->yieldContent('styles'); ?>
<style>
    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background:url("<?php echo e(asset('assets/icons/spinner.gif')); ?>") no-repeat center center rgba(0, 0, 0, 0.25)
    }
</style>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/layouts/partials/_head-ar.blade.php ENDPATH**/ ?>