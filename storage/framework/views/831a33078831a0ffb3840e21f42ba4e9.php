<?php $__env->startPush('style'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.page-header', ['title' => 'Product Create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="<?php echo e(route('admin.product.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input class="form-control" name="product-name" />
                                </div>
                                <div class="form-group">
                                    <label>Product Brand</label>
                                    <input class="form-control" name="product-brand" />
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Product Price</label>
                                        <input class="form-control" name="product-price" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product Percentage</label>
                                        <input class="form-control" name="product-discount-percentage" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product SKU</label>
                                        <input class="form-control" name="product-sku" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Short Description</label>
                                    <textarea  class="form-control" name="product-short-description" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Product Long Description</label>
                                    <textarea  class="form-control tinymceTextarea" name="product-short-description" cols="30" rows="10"></textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label>Product Image</label>
                                        <input class="form-control" name="product-image" type="file" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product Flip Image</label>
                                        <input class="form-control" name="product-flip-image" type="file" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Product Details Images</label>
                                        <input class="form-control" name="product-desc-images[]" multiple type="file"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Category</label>
                                        <select class="form-control" name="category-id[]" multiple>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->uid); ?>"><?php echo e($item->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Tag</label>
                                        <select class="form-control" name="tag-id[]" multiple="multiple">
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->uid); ?>"><?php echo e($item->tag_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>
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
<script src="<?php echo e(asset('tinymce/tinymce.min.js')); ?>"></script>
<?php echo e(tinymceTextarea()); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Desktop\Amit Kumar\Laravel\handmadeinindia\resources\views/admin/product-create.blade.php ENDPATH**/ ?>