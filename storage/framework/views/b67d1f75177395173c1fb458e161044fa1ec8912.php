<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">

                    <a class="btn btn-primary" href="<?php echo e(route('cars.create')); ?>">Add new car</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Images</th>
                            <th>Reg#</th>
                            <th>Car Brand</th>
                            <th>Car Model</th>
                            <th>Owner</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                <img src="<?php echo e(asset('storage/cars/'.$car->id.".jpg")); ?>" style="width: 200px;">




                                </td>
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

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/cars/index.blade.php ENDPATH**/ ?>