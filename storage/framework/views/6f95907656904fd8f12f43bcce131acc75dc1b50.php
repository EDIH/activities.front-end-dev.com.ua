<?php
/**
 * @var $page \App\Models\Pages;
 */
?>












<div id="blockList" class="row">
    <?php $__currentLoopData = $page->blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('admin.block.block_item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/primus/prj/abz/resources/views/admin/block/block_list.blade.php ENDPATH**/ ?>