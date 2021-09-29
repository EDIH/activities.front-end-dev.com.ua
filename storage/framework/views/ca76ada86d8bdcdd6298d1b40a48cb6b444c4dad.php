<?php
/**
 * @var $model \Illuminate\Database\Eloquent\Collection
 * @var $page \App\Models\Pages;
 */
?>

<?php $__env->startSection('title', __('pages.list')); ?>
<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('breadcrumbs', $breadcrumbs = [
        [
            'label' => 'Панель управления',
            'url' => route('admin.pages.list')
        ],
        [
            'label' => __('pages.list'),
        ]
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('admin.pages.create')); ?>" class="btn btn-sm btn-info"> <?php echo app('translator')->get('pages.add'); ?> </a>
    <?php if($model->count() > 0): ?>
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


                            <th> <?php echo app('translator')->get('pages.level'); ?> </th>
                            <th> <?php echo app('translator')->get('system.title'); ?> </th>
                            <th> <?php echo app('translator')->get('pages.alias'); ?> </th>
                            <th> <?php echo app('translator')->get('system.status'); ?> </th>
                            <th> <?php echo app('translator')->get('system.image'); ?> </th>
                            <th> <?php echo app('translator')->get('system.action'); ?> </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('admin.pages.includes.page_list_row', ['page' => $page, 'level' => 0, 'parents' => []], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="<?php echo e(route('admin.pages.create')); ?>" class="btn btn-sm btn-info float-left"> <?php echo app('translator')->get('pages.add'); ?> </a>
            </div>
            <!-- /.card-footer -->
        </div>
    <?php else: ?>
        No pages...
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('adminlte_js'); ?>
    <script src="<?php echo e(asset('/js/app.js')); ?>"></script>
    <script>
            $(document).Toasts('create', {
                class: 'bg-warning',
                title: 'Как создать страницу ',
                body: `- <a href="/admin/pages/create">Добавить страницу</a><br>
 - <a href="/admin/block_templates">Создать шаблон</a> (один шаблон может использоваться для несколько страниц) <br>
и использовать этот шаблон для наполнения страницы.`,
                position: 'bottomRight',
                autohide: true,
                delay: 1e4
            })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/primus/prj/abz/resources/views/admin/pages/index.blade.php ENDPATH**/ ?>