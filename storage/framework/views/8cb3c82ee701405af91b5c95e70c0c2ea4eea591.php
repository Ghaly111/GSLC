<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    

    <?php $__env->startSection('title', 'GHALZ RESTO'); ?>

    <?php $__env->startSection('content'); ?>
        <head>
                <a href="/home">Home</a>
        </body>
    <?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\GSLC1\resources\views/welcome.blade.php ENDPATH**/ ?>