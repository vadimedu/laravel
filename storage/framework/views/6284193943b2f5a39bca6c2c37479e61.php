<?php if($errors->all()): ?>
		<div class="alert alert-danger">
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p><?php echo e($error); ?></p>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	<?php endif; ?>
<form method="post" action="<?php echo e(route('news.store')); ?>">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="название статьи">
    <input type="text" name="content"  placeholder="контент">
    <input type="text" name="user_name" placeholder="имя юзера">
    <button type="submit">Отправить</button>
</form><?php /**PATH /var/www/html/resources/views/news/create.blade.php ENDPATH**/ ?>