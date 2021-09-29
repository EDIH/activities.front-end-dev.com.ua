<?php
/**
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

<?php $__env->startSection('content'); ?>
    <section>
        User Info
        <br>
        <?php echo e(auth()->user()->name); ?>

        <?php echo e(auth()->user()->email); ?>

        <?php echo e(auth()->user()->profile()->name); ?>

        <?php echo e(auth()->user()->profile()->surname); ?>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/primus/prj/teach/resources/views/client/page/cabinet.blade.php ENDPATH**/ ?>