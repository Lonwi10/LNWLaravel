<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-sm-4">

        <img src="<?php echo e($champions['poster']); ?>" style="max-width:100%" />

    </div>
    <div class="col-sm-8">

        <h1 style="color:white"><?php echo e($champions["nombre"]); ?></h1>
        <h2 style="color:white">Rol: <b><?php echo e($champions["rol"]); ?></b></h2>
        <h2 style="color:white">Tier: <b><?php echo e($champions["tier"]); ?></b></h2>
        <button type="button" class="btn btn-warning" onclick="location.href='<?php echo e(url('/')); ?>/catalogo/<?php echo e($id); ?>/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar champion</button>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>