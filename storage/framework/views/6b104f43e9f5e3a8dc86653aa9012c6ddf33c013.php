<?php
/**
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $model->page->enabled_blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $view = explode('.', $block->template->path)[0]; ?>
    <?php echo $__env->make('client.block_templates.templates.'.$view, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/primus/prj/teach/resources/views/client/page/content.blade.php ENDPATH**/ ?>