<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">

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
                <label class="form-label">Owner</label>
                <label>
                    <select class="form-control" name="owner_id">
                        <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($owner->id); ?>" <?php echo e($car->owner_id == $owner->id ? 'selected' : ''); ?>><?php echo e($owner->name); ?> <?php echo e($owner->surname); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </label>
            </div>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-dark mx-3 float-end" href="<?php echo e(route('cars.index')); ?>">Go Back</a>
    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/cars/update.blade.php ENDPATH**/ ?>