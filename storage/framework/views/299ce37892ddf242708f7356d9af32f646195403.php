<?php
/**
 * @var $level integer
 * @var $page \App\Models\Pages;
 */
?>
<tr>







    <td>

            <?php $z = 0; ?>
            <?php while($z < $level): ?>
                <?php echo e('->'); ?>

                <?php $z++ ?>
            <?php endwhile; ?>
        <?php echo e($level); ?>




    </td>
    <td>
        <?php echo e($page->title); ?>

    </td>
    <td>
        <?php echo e($page->alias); ?>

    </td>
    <td>
        <?php if($page->enabled): ?>
            <span class="badge badge-success">Enabled</span>
        <?php else: ?>
            <span class="badge badge-danger">Disable</span>
        <?php endif; ?>
    </td>



    <td>
        <div class="btn-group">
            <a href="<?php echo e(route('admin.pages.edit', ['id' => $page->id])); ?>" class="btn btn-success"> <?php echo app('translator')->get('system.update'); ?> </a>
            <a href="<?php echo e(route('admin.pages.content.update', ['page' => $page])); ?>" class="btn btn-primary"> <?php echo app('translator')->get('pages.content'); ?> </a>
            <a href="#" class="btn btn-danger"> <?php echo app('translator')->get('system.delete'); ?> </a>
        </div>
        
        
    </td>

</tr>
<?php $__currentLoopData = $page->allChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $parents[] = $page->title ; ?>
    <?php echo $__env->make('admin.pages.includes.page_list_row', ['page' => $page, 'level' => $level+1, 'parents' => $parents], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/pages/includes/page_list_row.blade.php ENDPATH**/ ?>