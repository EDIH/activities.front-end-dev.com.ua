<?php
/**
* @var $page \App\Models\Pages;
* @var $content \App\Models\Block_contents;
* @var $templates \Illuminate\Database\Eloquent\Collection;
*/
?>

<form
    id="contentForm"
    method="POST"
    action="<?php echo e(route('admin.contents.update', ['block' => $block])); ?>"

    enctype="multipart/form-data"
>
    <!-- Default switch -->










    <?php $__currentLoopData = $block->attrs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
        <?php switch($attribute->type):
            case (0): ?>
            <label for=""> <?php echo e($attribute->name); ?> </label>
                <?php
                $url = $block->contents()->attribute($attribute->id)->first()
                    ? '/uploads/contents/' .$block->contents()->attribute($attribute->id)->first()->translate->value
                    : '/uploads/block_template_attributes/' . $attribute->default_value;
                ?>
                <img class="img-fluid pad" src="<?php echo e($url); ?>" alt="Preview">
            <input type="hidden" name="content[<?php echo e($attribute->id); ?>]" value="">
            <div class="input-group mb-3" id="option_image_<?php echo e($attribute->id); ?>">
                <div class="custom-file">
                    <input type="hidden" name="content[<?php echo e($attribute->id); ?>]" value="<?php echo e($attribute->value); ?>">
                    <input id="optionFile_<?php echo e($attribute->id); ?>" type="file" class="custom-file-input input"  name="content[<?php echo e($attribute->id); ?>]">
                    <label class="custom-file-label" for="optionFile_<?php echo e($attribute->id); ?>"><?php echo e($attribute->value); ?></label>
                </div>
            </div>
            <?php break; ?>

            <?php case (1): ?>

                <label for=""> <?php echo e($attribute->name); ?> </label>
                <input
                    name="content[<?php echo e($attribute->id); ?>]"
                    type="text"
                    class="form-control input"
                    placeholder="<?php echo e($attribute->default_value); ?>"
                    autocomplete="off"
                    value="<?php echo e($block->contents()->attribute($attribute->id)->first()->translate->value ?? $attribute->value); ?>"
                >




            <?php break; ?>

            <?php case (2): ?>



                <label for=""> <?php echo e($attribute->name); ?> </label>
                <textarea
                    class="form-control input"
                    rows="3"
                    placeholder="<?php echo e($attribute->default_value); ?>"
                    name="content[<?php echo e($attribute->id); ?>]"
                ><?php echo e($block->contents()->attribute($attribute->id)->first()->translate->value ?? $attribute->value); ?></textarea>




            <?php break; ?>

        <?php endswitch; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="custom-control custom-switch">
        <input name="enabled" type="checkbox" class="custom-control-input" id="customSwitches" checked>
        <label class="custom-control-label" for="customSwitches"> <?php echo app('translator')->get('system.disable'); ?> </label>
    </div>















    <div class="alert alert-danger" style="display: none;">
    </div>
















































































</form>







<?php /**PATH /home/primus/prj/teach/resources/views/admin/content/includes/update_form.blade.php ENDPATH**/ ?>