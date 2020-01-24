<?php $__env->startSection('content'); ?>
	<div class="container">
		<h1>Записи на услугу</h1>
		<a href="<?php echo e(url('/create_user')); ?>" class="btn btn-primary">Создать</a>
		
		<hr>

		<table class="footable table table-stripped toggle-arrow-tiny" data-page-size="20">
		  <thead>
		    <tr>
		      <th data-toggle="true">Имя</th>
		      <th data-toggle="true">E-mail</th>
		      <th data-hide="phone">Услуга</th>
			  <th data-hide="phone">Цена</th>
			  <th data-hide="phone">Мастер</th>
		      <th class="text-right" data-sort-ignore="true">Действие</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		      <tr>
		        <td><?php echo e($d['name']); ?></td>
		        <td><?php echo e($d['email']); ?></td>
		        <td>
					<?php $__currentLoopData = $d['order']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<p><?php echo e($ord['name_serv']); ?></p>	
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</td>
				<td>
					<?php $__currentLoopData = $d['order']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 <p><?php echo e($ord['cost']); ?> </p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</td>
				<td>
					<?php $__currentLoopData = $d['order']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<p><?php echo e($ord['employee']); ?> </p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</td>
		        <td class="text-right">
		          <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" method="POST" action="<?php echo e(url('/delete_user', $d['id'])); ?>" method="post">
		            <!--<input type="hidden" name="_method" value="DELETE">-->
		            <?php echo e(csrf_field()); ?>

		            <div class="btn-group">
		              <a class="btn btn-primary" href="<?php echo e(url('/edit_user', $d['id'])); ?>">Редактировать</a>
		              <button type="submit" class="btn btn-danger">Удалить</button>
		            </div>
		          </form>
		        </td>
		      </tr>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		      <tr>
		        <td colspan="5" class="text-center">
		          <h2 class="ui center aligned icon header" class="center aligned">
		            <i class="circular database icon"></i>
		            Данные отсутствуют
		          </h2>
		        </td>
		      </tr>
		    <?php endif; ?>

		  </tbody>
		</table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\laravelmain\resources\views/users/index.blade.php ENDPATH**/ ?>