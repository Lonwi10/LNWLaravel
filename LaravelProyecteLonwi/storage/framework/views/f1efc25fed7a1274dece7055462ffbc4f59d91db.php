<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-8">

        <h1><?php echo e($tiers['nombre']); ?></h1>
        <button type="button" class="btn btn-warning" onclick="location.href='<?php echo e(url('/')); ?>/CTier/<?php echo e($id); ?>/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar Tier</button>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>