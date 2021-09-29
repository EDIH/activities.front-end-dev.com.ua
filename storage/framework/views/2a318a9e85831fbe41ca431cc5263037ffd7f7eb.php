<?php
/**
* @var $block \App\Models\Block;
* @var $templates \App\Models\Block_templates;
*/
?>

<div class="col-md-12" id="<?php echo e($block->id); ?>">
    <div class="card <?php if(empty($show)): ?> collapsed-card <?php endif; ?> <?php if($block->enabled): ?> card-primary shadow <?php else: ?> card-gray <?php endif; ?>">
        <div class="card-header">
            <h3 class="card-title m-0 p-0">
                <?php echo e(__('block.block')); ?>

                <small>[<?php echo e($block->template->name); ?>]</small>
            </h3>
            <p class="m-0 p-0">[<?php echo e($block->template->path); ?>]</p>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <?php if(isset($show)): ?>
                        <i class="fas fa-minus"></i>
                    <?php else: ?>
                        <i class="fas fa-plus"></i>
                    <?php endif; ?>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body row">
            <div class="col-md-2">
                <button
                    type="button"
                    class="btn-xs btn-success show-content-form"
                    data-toggle="modal"
                    data-target="#contentFormModal"
                    data-url="<?php echo e(route('admin.contents.create', ['block' => $block])); ?>"
                    data-block_id="<?php echo e($block->id); ?>"
                >
                    <i class="fas fa-plus"></i>
                </button>










                <button
                    class="btn-xs btn-danger remove-block"
                    data-block_id="<?php echo e($block->id); ?>"
                    data-url="<?php echo e(route('admin.blocks.delete', ['block' => $block])); ?>"
                    data-toggle="modal"
                    data-target="#confirmDeleteBlock"
                ><i class="fas fa-trash"></i></button>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <select
                        id="block_template_id_<?php echo e($block->id); ?>"
                        class="form-control select2bs4 select2-hidden-accessible block-template-id"
                        data-block_id="<?php echo e($block->id); ?>"
                    >
                        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option
                                <?php if($template->id == $block->block_template_id): ?>
                                    selected
                                <?php endif; ?>
                                value="<?php echo e($template->id); ?>"
                            >
                                <?php echo e($template->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="input-group-append">
                        <a
                            id="update_block_template_id_<?php echo e($block->id); ?>"
                            href="#"
                            class="btn btn-danger confirm_template"
                            data-block_id="<?php echo e($block->id); ?>"
                            data-url="<?php echo e(route('admin.blocks.update', ['block' => $block])); ?>"
                            style="display:none"
                        > <?php echo app('translator')->get('block.confirm_page_template'); ?> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                        <input
                            type="checkbox"
                            class="update_block_status"
                            data-url="<?php echo e(route('admin.blocks.update', ['block' => $block])); ?>"
                            <?php if($block->enabled): ?>
                            checked
                            <?php endif; ?>
                            data-block_id="<?php echo e($block->id); ?>"
                        >
                    <label> <?php echo app('translator')->get('system.disable'); ?> </label>
                </div>
            </div>
        </div>
        <div class="overlay dark" style="display: none">
            <i class="fas fa-2x fa-sync-alt fa-spin"></i>
        </div>
        <div class="card-body row contents">
            <?php echo $__env->make('admin.content.content_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/primus/prj/abz/resources/views/admin/block/block_item.blade.php ENDPATH**/ ?>