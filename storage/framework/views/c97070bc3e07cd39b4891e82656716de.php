<!-- resources/views/components/admin-dashboard.blade.php -->
<!-- Admin-specific content goes here -->
<div>
    <h1>Welcome to the Admin Dashboard!</h1>

    <h3>All Users</h3>
    <br>
    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>- <?php echo e($user->name); ?> <?php echo e($user->is_admin); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /home/ryan/Documents/class/dsl/laravelapp/resources/views/components/admin-dashboard.blade.php ENDPATH**/ ?>