<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('owners.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <label>
                <input class="form-control" type="text" name="name">
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Surname:</label>
            <label>
                <input class="form-control" type="text" name="surname">
            </label>
        </div>
        <button class="btn btn-primary">Add new</button>
        <a class="btn btn-dark mx-3 float-end" href="<?php echo e(route('owners.index')); ?>">Go Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/owners/create.blade.php ENDPATH**/ ?>