<?php $__env->startSection('content'); ?>

<div class="row">

    <?php $__currentLoopData = $arrayTier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Tier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-4 text-center">

        <a href="<?php echo e(url('/CTier/' . $Tier['id'] )); ?>">
            <!--<img src="<?php echo e($Tier['poster']); ?>" style="height:200px "/> !-->
            <button><h4>
                <?php echo e($Tier['nombre']); ?>

            </h4></button>
        </a>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>