<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('cars.update', $car->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label class="form-label">Reg#:</label>
            <label>
                <input class="form-control" type="text" name="reg_number" value="<?php echo e($car->reg_number); ?>">
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Brand:</label>
            <label>
                <input class="form-control" type="text" name="brand" value="<?php echo e($car->brand); ?>">
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Model:</label>
            <label>
                <input class="form-control" type="text" name="model"  value="<?php echo e($car->model); ?>">
            </label>
        </div>
            <div  class="mb-3">
                <label class="form-label">Owner id:</label>
                <label>
                    <input class="form-control" type="text" name="owner_id" value="<?php echo e($car->owner_id); ?>">
                </label>
            </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-dark mx-3 float-end" href="<?php echo e(route('cars.index')); ?>">Go Back</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/cars/update.blade.php ENDPATH**/ ?>