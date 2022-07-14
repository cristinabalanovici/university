
<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h1>Add new product</h1>
        <div class="lead">
            Add new product and assign description.
        </div>
        <div class="container mt-4">
            <form method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="<?php echo e(old('name')); ?>" type="text" class="form-control" name="name" placeholder="Name" required>
                    <?php if($errors->has('name')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input value="<?php echo e(old('slug')); ?>" type="text" class="form-control" name="slug" placeholder="Slug" required>
                    <?php if($errors->has('slug')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('slug')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="<?php echo e(old('description')); ?>" type="text" class="form-control" name="description" placeholder="Description" required>
                    <?php if($errors->has('description')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="fulldescription" class="form-label">Full Description</label>
                    <input value="<?php echo e(old('fulldescription')); ?>" type="text" class="form-control" name="fulldescription" placeholder="Full Description" required>
                    <?php if($errors->has('fulldescription')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('fulldescription')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input value="<?php echo e(old('image')); ?>" type="text" class="form-control" name="image" placeholder="Image" required>
                    <?php if($errors->has('image')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('image')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input value="<?php echo e(old('price')); ?>" type="text" class="form-control" name="price" placeholder="Price" required>
                    <?php if($errors->has('price')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('price')); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Save product</button>
                <a href="<?php echo e(route('crud.crud')); ?>" class="btn btn-default">Back</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/crud/create.blade.php ENDPATH**/ ?>