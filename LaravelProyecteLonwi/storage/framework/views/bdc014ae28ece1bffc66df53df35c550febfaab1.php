<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-8">

       
        <?php $__currentLoopData = $champions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $champion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    	<div class="col-sm-7 text-center">

	        <a href="<?php echo e(url('/catalogo/' . $champion['id'] )); ?>">
	            <img src="<?php echo e($champion['poster']); ?>" style="height:200px "/>
	            <h4 style="min-height:45px;margin:5px 0 10px 0">
	                <?php echo e($champion['nombre']); ?>

	            </h4>
	        </a>

    	</div>
    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <h1 style="color:white"><?php echo e($tiers['nombre']); ?></h1>
        <button type="button" class="btn btn-warning right" onclick="location.href='<?php echo e(url('/')); ?>/CTier/<?php echo e($id); ?>/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar Tier
        </button>


    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>