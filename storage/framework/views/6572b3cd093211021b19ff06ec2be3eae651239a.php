<?php $__env->startSection('content'); ?>
	
	<div class="container">
		<form class="form-horizontal" action="<?php echo e(url('/update_user', $user['id'])); ?>" method="post">
			<!--<input type="hidden" name="_method" value="put">-->
		  <?php echo e(csrf_field()); ?>

			<fieldset class="form-horizontal">
			  <div class="form-group"><label class="col-sm-2 control-label">Имя:</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" placeholder="" value="<?php echo e($user['name']); ?>">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">E-mail:</label>
			    <div class="col-sm-10">
			      <input type="text" name="email" class="form-control" placeholder="" value="<?php echo e($user['email']); ?>">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">Пароль:</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" class="form-control" placeholder="" value="">
			    </div>
			  </div>
			  <?php $__currentLoopData = $user['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <div class="form-group"><label class="col-sm-2 control-label">Услуга:</label>
					<div class="col-sm-10">
					  <input type="text" name="service" class="form-control" placeholder="" value="<?php echo e($ser['name_serv']); ?>">
					</div>
				  </div>
			 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  <?php $__currentLoopData = $user['employees']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <div class="form-group"><label class="col-sm-2 control-label">Мастер:</label>
					<div class="col-sm-10">
					  <input type="text" name="service" class="form-control" placeholder="" value="<?php echo e($emp['employee']); ?>">
					</div>
				  </div>
			 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  <div class="form-group">
			    <div class="col-sm-4 col-sm-offset-2">
			      <button class="btn btn-primary" type="submit">Сохранить</button>
			    </div>
			  </div>
		  	</fieldset>
		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\laravelmain\resources\views/users/edit.blade.php ENDPATH**/ ?>