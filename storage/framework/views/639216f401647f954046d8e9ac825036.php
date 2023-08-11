<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldPushContent('title', "Admin: Handmade In India"); ?></title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo e(asset('admin/assets/css/bootstrap.css')); ?>" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo e(asset('admin/assets/css/font-awesome.css')); ?>" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo e(asset('admin/assets/css/custom.css')); ?>" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />

    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>
    <div id="wrapper">
        <?php echo $__env->make('admin.layouts.top-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.layouts.side-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo e(asset('admin/assets/js/jquery-1.10.2.js')); ?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo e(asset('admin/assets/js/bootstrap.min.js')); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo e(asset('admin/assets/js/jquery.metisMenu.js')); ?>"></script>
    
    <?php echo $__env->yieldPushContent('script'); ?>
    <script src="<?php echo e(asset('admin/assets/js/custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\lenovo\Desktop\Amit Kumar\Laravel\handmadeinindia\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>