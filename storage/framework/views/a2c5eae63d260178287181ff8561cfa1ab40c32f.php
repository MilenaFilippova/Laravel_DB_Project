<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>Documents</title>
</head>
<body>
	<ul>
		<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
			<li><?php echo e($task->body); ?></li>
			
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</body>
</html><?php /**PATH W:\domains\laravelmain\resources\views/hello.blade.php ENDPATH**/ ?>