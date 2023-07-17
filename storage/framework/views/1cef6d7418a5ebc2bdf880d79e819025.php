
<?php $__env->startSection('content'); ?>
    <div style="border: 1px solid teal;">
        <h2> <?php echo e($news['column']); ?> </h2>
        <p> <?php echo e($news['author']); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/show.blade.php ENDPATH**/ ?>