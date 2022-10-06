<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">









    <?php $__errorArgs = ['reg_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <form action="<?php echo e(route('cars.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Reg#:</label>
            <label>
                <input class="form-control <?php if($errors->has('reg_number')): ?> is-invalid <?php endif; ?>" type="text" name="reg_number" value="<?php echo e(old('reg_number')); ?>" required>
                <?php if($errors->has('reg_number')): ?>
                    <?php $__currentLoopData = $errors->get('reg_number'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($error); ?> <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </label>
        </div>
        <div class="mb-3">
            <label class="form-label">Brand:</label>
            <label>
                <input class="form-control" type="text" name="brand" value="<?php echo e(old('brand')); ?>" required>
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Model:</label>
            <label>
                <input class="form-control" type="text" name="model" value="<?php echo e(old('model')); ?>" required>
            </label>
        </div>
        <div  class="mb-3">
            <label class="form-label">Owner</label>
            <label>
                <select class="form-control name="owner_id">
                    <option selected>Choose</option>
                    <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($owner->id); ?>"><?php echo e($owner->name); ?> <?php echo e($owner->surname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

            </label>
        </div>
        <button class="btn btn-primary">Add new</button>
        <a class="btn btn-dark mx-3 float-end" href="<?php echo e(route('cars.index')); ?>">Go Back</a>
    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/cars/create.blade.php ENDPATH**/ ?>