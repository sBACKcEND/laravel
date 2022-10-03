<table border="1">
    <tr>
        <th>Name</th>
        <th>Surname</th>
    </tr>
    <?php $__currentLoopData = $owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($owner->name); ?></td>
        <td><?php echo e($owner->surname); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\xampp\htdocs\draudimas\resources\views/index.blade.php ENDPATH**/ ?>
