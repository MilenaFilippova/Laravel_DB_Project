<?php $__env->startSection('content'); ?>

	<div class="container">
		<form class="form-horizontal" action="<?php echo e(url('/user')); ?>" method="post">
		  <?php echo e(csrf_field()); ?>

			<fieldset class="form-horizontal">
			  <div class="form-group">
			  <label class="col-sm-2 control-label">Имя:</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" placeholder="Enter your name" value="">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">E-mail:</label>
			    <div class="col-sm-10">
			      <input type="text" name="email" class="form-control" placeholder="Enter your e-mail" value="">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">Пароль:</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" class="form-control" placeholder="Enter password" value="">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">Услуга:</label>
			    <div class="col-sm-10">
			      <input type="text" name="service" class="form-control" placeholder="Enter service id" value="">
			    </div>
			  </div>
			  <div class="form-group"><label class="col-sm-2 control-label">Мастер:</label>
			    <div class="col-sm-10">
			      <input type="text" name="employee" class="form-control" placeholder="Enter master id" value="">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-4 col-sm-offset-2">
			      <button class="btn btn-primary" type="submit">Сохранить</button>
			    </div>
			  </div>
		  	</fieldset>
		</form>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\laravelmain\resources\views/users/create.blade.php ENDPATH**/ ?>