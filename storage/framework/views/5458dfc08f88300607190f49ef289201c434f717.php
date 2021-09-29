<?php
/**
 * @var $page \App\Models\Pages;
 * @var $templates \Illuminate\Database\Eloquent\Collection;
 */
?>

<?php $__env->startSection('title', __('pages.content')); ?>
<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.pages.list')
        ],
        [
            'label' => __('block.content') .' страницы "'. $page->title . '"',
        ]
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Button trigger modal -->








    <?php echo $__env->make('admin.content.includes.content_modal_dialog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form id="blockCreateForm" action="<?php echo e(route('admin.blocks.create', ['page' => $page])); ?>">
    </form>
    <div class="row">
        <div class="col-md-3">
            <h3>Доступные шаблоны</h3>
        </div>
        <div class="col-md-9">
            <h3>Предварительный просмотр страницы</h3>
        </div>
    </div>
    <div class="row admin-template-row">
        <?php echo $__env->make('admin.block.template_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.block.block_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="modal fade" id="confirmDeleteBlock">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title"> <?php echo app('translator')->get('system.confirm'); ?> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> <?php echo app('translator')->get('block.confirm_delete_block_question'); ?> </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal"> <?php echo app('translator')->get('system.cancel'); ?> </button>
                    <button type="button" class="btn btn-outline-light" id="deleteBlock"> <?php echo app('translator')->get('system.delete'); ?> </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>





















<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo e(asset('/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/list.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fronten8/activities.front-end-dev.com.ua/resources/views/admin/block/index.blade.php ENDPATH**/ ?>