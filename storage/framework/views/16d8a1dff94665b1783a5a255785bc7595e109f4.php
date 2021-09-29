<?php
/**
 * @var $templates \Illuminate\Database\Eloquent\Collection;
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
        ]
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.block_templates.includes.template_modal_dialog_load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title"> <?php echo app('translator')->get('pages.list'); ?> </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th><?php echo app('translator')->get('system.preview'); ?></th>
                        <th> <?php echo app('translator')->get('block_templates.name'); ?> </th>
                        <th> <?php echo app('translator')->get('block_templates.path'); ?> </th>
                        <th> <?php echo app('translator')->get('system.status'); ?> </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img src="<?php echo e('/uploads/block_templates/thumbs/' . $template->image_path); ?>" alt="">
                            </td>
                            <td><?php echo e($template->name); ?></td>
                            <td><?php echo e($template->path); ?></td>
                            <td>
                                <?php if($template->enabled): ?>
                                    <span class="badge badge-success">Enabled</span>
                                <?php else: ?>
                                    <span class="badge badge-danger">Disable</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.block_templates.edit', ['block_template' => $template])); ?>" class="btn btn-success"> <?php echo app('translator')->get('system.update'); ?> </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button
                type="button"
                class="btn btn-sm btn-info float-left"
                data-toggle="modal"
                data-target="#templateModalLoad"
                id="createAttr"
            > <?php echo app('translator')->get('block_templates.create'); ?> </i>
            </button>
        </div>
        <div class="card-footer clearfix">
            <a href="<?php echo e(route('admin.block_templates.create')); ?>" class="btn btn-sm btn-info float-left"> <?php echo app('translator')->get('block_templates.load'); ?> </a>
        </div>

        <!-- /.card-footer -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    <script src="<?php echo e(asset('/js/load.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/primus/prj/teach/resources/views/admin/block_templates/index.blade.php ENDPATH**/ ?>