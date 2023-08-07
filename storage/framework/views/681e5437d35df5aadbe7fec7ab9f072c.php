<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo $__env->yieldContent('meta_tags'); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/favicon.webp')); ?>">

    <!-- CSS ============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/font-awesome-pro.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/themify-icons.css')); ?>">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/ion.rangeSlider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/photoswipe.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/photoswipe-default-skin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/slick.css')); ?>">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/vendor.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/plugins.min.css')); ?>"> -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>

    <title><?php echo $__env->yieldPushContent('title'); ?></title>

</head>

<body class="homepage-bg1">


    <?php echo $__env->make('home.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('home.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- JS ============================================ -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-migrate-3.1.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Plugins JS -->
    <script src="<?php echo e(asset('assets/js/plugins/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/mo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.matchHeight-min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/photoswipe.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/photoswipe-ui-default.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.zoom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/ResizeSensor.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.sticky-sidebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/product360.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/scrollax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/instafeed.min.js')); ?>"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="<?php echo e(asset('assets/js/vendor/vendor.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/plugins.min.js')); ?>"></script> -->

    <!-- Main Activation JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <?php echo $__env->yieldContent('script'); ?>


</body>

</html>
<?php /**PATH C:\Users\lenovo\Desktop\Amit Kumar\Laravel\handmadeinindia\resources\views/home/layouts/app.blade.php ENDPATH**/ ?>