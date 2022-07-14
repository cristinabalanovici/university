
<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h1>Show product</h1>
        <div class="lead">
        </div>
        <div class="container mt-4">
            <div>
                Name: <?php echo e($product->name); ?>

            </div>
            <div>
                Slug: <?php echo e($product->slug); ?>

            </div>
            <div>
                Description: <?php echo e($product->description); ?>

            </div>
            <div>
            Full Description: <?php echo e($product->fullldescription); ?>

            </div>
            <div>
                Image: <?php echo e($product->image); ?>

            </div>
            <div>
                Price: <?php echo e($product->price); ?>

            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="<?php echo e(route('crud.edit', $product->id)); ?>" class="btn btn-info">Edit</a>
        <a href="<?php echo e(route('crud.crud')); ?>" class="btn btn-default">Back</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/crud/show.blade.php ENDPATH**/ ?>