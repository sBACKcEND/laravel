<?php $__env->startSection('content'); ?>
    <a class="btn btn-primary" href="<?php echo e(route('cars.create')); ?>">Add new car</a>
    <table class="table">
        <thead>
        <tr>
            <th>Reg#</th>
            <th>Car Brand</th>
            <th>Car Model</th>
            <th>Owner id</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($car->reg_number); ?></td>
                <td><?php echo e($car->brand); ?></td>
                <td><?php echo e($car->model); ?></td>
                <td><?php echo e($car->owner_id); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('cars.edit', $car->id)); ?>">Edit</a> </td>
                <td>
                    <form action="<?php echo e(route('cars.destroy', $car->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/cars/index.blade.php ENDPATH**/ ?>