<?php $__env->startSection('menu'); ?>
    ##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
    <p>Este condenido es añadido al menú principal.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Este apartado aparecerá en la sección "content".</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>