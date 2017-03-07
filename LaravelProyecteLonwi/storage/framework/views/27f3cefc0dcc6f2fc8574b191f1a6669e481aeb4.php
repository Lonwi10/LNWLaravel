<?php $__env->startSection('content'); ?>

<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-nombre text-center">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					Añadir Champion
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				<form action="<?php echo e(url('catalogo')); ?>" method="POST">
				
					<?php echo e(csrf_field()); ?>

    
    				<div class="form-group">
    					<label for="nombre">Nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control">
					</div>

					<div class="form-group">
    					<label for="rol">Rol</label>
    					<input type="text" name="rol" id="rol" class="form-control">
					</div>

					<div class="form-group">
    					<label for="tier">Tier</label>
    					<select name="tier" id="tier" class="form-control">
    						<?php $__currentLoopData = $tiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($tier['nombre']); ?>"><?php echo e($tier['nombre']); ?></option>
    						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    					</select>
					</div>

					<div class="form-group">
    					<label for="poster">Poster</label>
    					<input type="url" name="poster" id="poster" class="form-control">
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Añadir Champion
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>
<!--stop-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>