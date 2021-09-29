<?php
/**
 * @var $page \App\Models\Pages;
 */
?>












<div id="blockList" class="col-md-9 connectedSortable blockList" style="
    box-shadow: 0 4px 12px 0 rgb(0 23 46 / 14%);
    padding: 0;
    border-radius: 6px;
    cursor: pointer;">
    <?php $__currentLoopData = $page->blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('admin.block.block_item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/fronten8/activities.front-end-dev.com.ua/resources/views/admin/block/block_list.blade.php ENDPATH**/ ?>