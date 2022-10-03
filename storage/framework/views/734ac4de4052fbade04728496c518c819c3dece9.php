<?php $__env->startSection('content'); ?>
    <a class="btn btn-primary" href="<?php echo e(route('owners.create')); ?>">Add new owner</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($owner->name); ?></td>
                <td><?php echo e($owner->surname); ?></td>
                <td><a class="btn btn-success" href="<?php echo e(route('owners.edit', $owner->id)); ?>">Edit</a> </td>
                <td>
                    <form action="<?php echo e(route('owners.destroy', $owner->id)); ?>" method="post">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/owners/index.blade.php ENDPATH**/ ?>