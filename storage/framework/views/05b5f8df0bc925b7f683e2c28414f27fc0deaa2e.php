<?php $__env->startSection('content'); ?>

	<div class="card-body">
		<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form action="<?php echo e(url('order')); ?>" method="POST" class="form-horizontal">
			<?php echo e(csrf_field()); ?>

			
			<div class="row">
				<div class="form-group">
					<label for="Order" class="col-sm-3 control-label">Order</label>
				
				
					<div class="row">
						<div class="col-sm-6">
							<input type="text" name="name" id="order-name" class="form-control">
						</div>
						<div class="col-sm-6">
							<button type="submit" class="btn-success">Add order </button>
						</div>
				</div>
			</div>
		</form>
	</div>


	<?php if(count($orders)>0): ?>
		<div class="card">
			<div class="card-heading">
				Current tasks
			</div>
			<div class="card-body">
				<table class="table table-striped task-table">
					<thead>
						<th>Order</th>
						<th>&nbsp;</th>
					</thead>
					<tbody>
						<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<td class="table-text">
							<div><?php echo e($orders-> name); ?></div>
						</td>
						<td>
							<form action=" <?php echo e(url('order/'.$order->id)); ?>" method="POST"></form>
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('DELETE')); ?>

								<button class="btn btn-danger">Delete </button>
							</form>	
						</td>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\laravelmain\resources\views/orders.blade.php ENDPATH**/ ?>