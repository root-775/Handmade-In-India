<?php $__env->startPush('style'); ?>
    <!-- TABLE STYLES-->
    <link href="<?php echo e(asset('admin/assets/js/dataTables/dataTables.bootstrap.css')); ?>" rel="stylesheet" />

    <style>
        .category-action {
            display: flex;
        }
        .category-action span {
            margin: 0 13px;
        }
        .category-action i {
            cursor: pointer;
        }
        .category-action form {
            margin: 0 13px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.page-header', ['title' => 'Product Category Create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <form method="POST" action="<?php echo e(route('admin.product-category.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="category-name" />
                                </div>

                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>
                        </div>

                        <div class="col-md-7">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover"
                                            id="category-dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td style="width: 80%"><?php echo e($item->category_name); ?></td>
                                                        <td class="category-action">
                                                            <a href="<?php echo e(route('admin.product-category.edit', ['product_category' => $item->uid])); ?>"><i class="fa fa-pencil text-primary" aria-hidden="true"></i></a>
                                                            <form action="<?php echo e(route('admin.product-category.destroy', ['product_category' => $item->uid ])); ?>" method="post" id="delete-category">
                                                                <?php echo method_field('delete'); ?>
                                                                <input type="hidden" name="uid" value="<?php echo e($item->uid); ?>">
                                                                <i class="fa fa-trash-o text-danger" onclick="document.getElementById('delete-category').submit();" aria-hidden="true"></i>
                                                            </form>
                                                            <a href="<?php echo e(route('admin.product-category.destroy', ['product_category' => $item->uid ])); ?>"></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
    <!-- /. ROW  -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo e(asset('admin/assets/js/dataTables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/dataTables/dataTables.bootstrap.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#category-dataTable').dataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Desktop\Amit Kumar\Laravel\handmadeinindia\resources\views/admin/product-category-create.blade.php ENDPATH**/ ?>