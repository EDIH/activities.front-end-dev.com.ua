<?php $__currentLoopData = $translate->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php switch($option->type):
        case (0): ?>
        <input type="hidden" name="option[image][<?php echo e($option->id); ?>]" value="">
            <div class="input-group mb-3" id="option_image_<?php echo e($option->id); ?>">
                <div class="custom-file">
                    <input type="hidden" name="option[image][<?php echo e($option->id); ?>]" value="<?php echo e($option->value); ?>">
                    <input id="optionFile_<?php echo e($option->id); ?>" type="file" class="custom-file-input input"  name="option[image][<?php echo e($option->id); ?>]">
                    <label class="custom-file-label" for="optionFile_<?php echo e($option->id); ?>"><?php echo e($option->value); ?></label>
                </div>
                <div class="input-group-append">
                    <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
                </div>
            </div>
            <?php break; ?>

        <?php case (1): ?>
            <div class="input-group mb-3" id="option_input_<?php echo e($option->id); ?>" style="">
                <input
                    name="option[input][<?php echo e($option->id); ?>]"
                    type="text"
                    class="form-control input"
                    placeholder="<?php echo e(__('system.input')); ?>"
                    autocomplete="off"
                    value="<?php echo e($option->value); ?>"
                >
                <div class="input-group-append">
                    <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
                </div>
            </div>
            <?php break; ?>

        <?php case (2): ?>
            <div class="input-group mb-3" id="option_textarea_<?php echo e($option->id); ?>" style="">
                <textarea
                    class="form-control input"
                    rows="3"
                    placeholder="<?php echo e(__('block_contents.content')); ?>"
                    name="option[textarea][<?php echo e($option->id); ?>]"
                ><?php echo e($option->value); ?></textarea>
                    <div class="input-group-append">
                        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
                    </div>
            </div>
            <?php break; ?>

    <?php endswitch; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/content/option_list.blade.php ENDPATH**/ ?>