<?php
/**
 * @var $model \App\Models\Pages;
 * @var $errors \Illuminate\Support\ViewErrorBag;
 */
?>

<?php $__env->startSection('title', $model->title.'-'.__('pages.edit')); ?>
<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.pages.list')
        ],
        [
            'label' => __('pages.list'),
            'url' => route('admin.pages.list')
        ],
        [
            'label' => __('pages.edit'),
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
        action="<?php echo e(route('admin.pages.update', ['id' => $model->id])); ?>"
        method="post"
        enctype="multipart/form-data"
    >
        <?php echo $__env->make('admin.pages.includes.create_update_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/primus/prj/teach/resources/views/admin/pages/update.blade.php ENDPATH**/ ?>