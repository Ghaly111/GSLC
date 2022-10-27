<?php $__env->startSection('title', 'GSLC 1'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <?php for($i = 1; $i <= 12; $i++): ?>
            <?php if($i < 12 ): ?>
               <p> <?php echo e($i); ?> WORD : AKU PASTI BISA <p>
            <?php elseif($i == 12): ?>
                <p> LAST WORD : AKHIRNYA BISA </p>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Webprog\Laravel\GSLC1\resources\views/home.blade.php ENDPATH**/ ?>