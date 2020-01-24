<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Documents</title>
</head>
<body>
	<ul>
		<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li>
				<a href="tasks/<?php echo e($task->id); ?>">
                   <?php echo e($task->body); ?>

				</a>
			</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</body>
</html><?php /**PATH W:\domains\laravelmain\resources\views/tasks/index.blade.php ENDPATH**/ ?>