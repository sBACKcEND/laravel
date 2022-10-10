<?php $__env->startSection('content'); ?>

    <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">

                    <a class="btn btn-primary" href="<?php echo e(route('owners.create')); ?>">Add new owner</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Cars</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($owner->name); ?></td>
                                <td><?php echo e($owner->surname); ?></td>
                                <td><?php echo e($owner->email); ?></td>
                                <td>
                                    <?php $__currentLoopData = $owner->car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        [<?php echo e($oc->brand); ?>

                                        <?php echo e($oc->model); ?>]
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
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

                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\draudimas\resources\views/owners/index.blade.php ENDPATH**/ ?>