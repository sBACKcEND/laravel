<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('owners.update', $owner->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input class="form-control" type="text" name="name" value="<?php echo e($owner->name); ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Surname:</label>
            <input class="form-control" type="text" name="surname" value="<?php echo e($owner->surname); ?>">
        </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-dark mx-3 float-end" href="<?php echo e(route('owners.index')); ?>">Go Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/owners/update.blade.php ENDPATH**/ ?>