<?php $__env->startPush('style'); ?>
    <!-- TABLE STYLES-->
    <link href="<?php echo e(asset('admin/assets/js/dataTables/dataTables.bootstrap.css')); ?>" rel="stylesheet" />
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
                            <form method="POST" action="<?php echo e(route('product-category.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="category-name" />
                                </div>

                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-primary">Reset Button</button>

                            </form>
                        </div>

                        <div class="col-md-7">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover"
                                            id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 80%">Trident</td>
                                                    <td>
                                                        <span><i class="fa fa-pencil text-primary" aria-hidden="true"></i></span>
                                                        <span><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 80%">Trident</td>
                                                    <td>
                                                        <span><i class="fa fa-pencil text-primary" aria-hidden="true"></i></span>
                                                        <span><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></span>
                                                    </td>
                                                </tr>
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
            $('#dataTables-example').dataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Desktop\Amit Kumar\Laravel\handmadeinindia\resources\views/admin/product-category-create.blade.php ENDPATH**/ ?>