<?php
/**
 * @var $block_template \App\Models\Block_templates;
 */
?>

<?php $__env->startSection('title', __('block_templates.list')); ?>
<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.block_templates.list')
        ],
        [
            'label' => __('block_templates.list'),
            'url' => route('admin.block_templates.list')
        ],
        [
            'label' => __('block_template.add'),
        ]
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form
        role="form"
        action="<?php echo e(route('admin.block_templates.update', ['block_template' => $block_template])); ?>"
        method="post"
        enctype="multipart/form-data"
    >
        <?php echo $__env->make('admin.block_templates.includes.create_update_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/primus/prj/teach/resources/views/admin/block_templates/update.blade.php ENDPATH**/ ?>