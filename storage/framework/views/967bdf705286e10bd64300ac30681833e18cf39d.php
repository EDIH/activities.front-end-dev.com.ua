
<form id="blockCreateForm" action="<?php echo e(route('admin.blocks.create', ['page' => $page])); ?>">
    <div class="alert alert-danger" style="display: none;">
    </div>
    <div class="form-check">
        <input
            id="enabled"
            name="enabled"
            type="checkbox"
            class="form-check-input"
        >
        <label class="form-check-label" for="enabled"> <?php echo app('translator')->get('system.disable'); ?> </label>
    </div>
    <div class="form-group">
        <label for="order"> <?php echo app('translator')->get('block.order'); ?> </label>
        <input
            id="order"
            name="order"
            type="text"
            class="form-control"
            placeholder="<?php echo e(__('block.use_drag_and_drop')); ?>"
            disabled
        >
    </div>
    <div class="form-group">
        <label> <?php echo app('translator')->get('block.template'); ?> </label>
        <select
            id="block_template_id"
            class="form-control select2bs4 select2-hidden-accessible"
            name="block_template_id"
            style="width: 100%;"
            data-select2-id="17"
            tabindex="-1"
            aria-hidden="true"
        >
            <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="<?php echo e($template->id); ?>"
                >
                    <?php echo e($template->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</form>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/block/includes/create_form.blade.php ENDPATH**/ ?>