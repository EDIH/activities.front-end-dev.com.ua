<?php
/**
 * @var $block_template \App\Models\Block_templates;
 */
?>
<?php echo csrf_field(); ?>
<div class="form-check">
    <input
        name="enabled"
        type="checkbox"
        class="form-check-input"
        id="enabled"
    >
    <label class="form-check-label" for="enabled"> <?php echo app('translator')->get('system.status'); ?> </label>
</div>
<div class="form-group">
    <label for="name"> <?php echo app('translator')->get('block_templates.name'); ?> </label>
    <input
        name="name"
        type="text"
        class="form-control"
        id="name"
        placeholder="name"
        value="<?php echo e($block_template->name ?? old('name')); ?>"
    >
</div>
<div class="form-group">
<?php $templates = \App\Models\Block_templates::template_list() ?>
    <label> <?php echo app('translator')->get('block_templates.path'); ?> </label>
    <select
        class="form-control select2bs4 select2-hidden-accessible"
        name="path"
        style="width: 100%;"
        data-select2-id="17"
        tabindex="-1"
        aria-hidden="true"
    >
        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($template->getFilename()); ?>"
            >
                <?php echo e($template->getBasename()); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="image"> <?php echo app('translator')->get('system.image'); ?> </label>
    <?php if(isset($block_template->image_path)): ?>
        <img class="img-fluid pad" src="<?php echo e('/uploads/block_templates/thumbs/' . $block_template->image_path); ?>" alt="Preview">
    <?php endif; ?>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="exampleInputFile"> <?php echo app('translator')->get('system.select image'); ?> </label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id=""> <?php echo app('translator')->get('system.upload'); ?> </span>
        </div>
    </div>
</div>

<div class="form-group attribute-fields">

</div>

<div class="form-group">
    <label for="selectType"> <?php echo app('translator')->get('block_option_contents.add_value'); ?> </code></label>
    <select class="custom-select form-control-border" id="type">
        <option value="-1" selected disabled hidden> <?php echo app('translator')->get('block_template_attributes.select_type'); ?> </option>
        <?php $__currentLoopData = $input_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="option_<?php echo e($type); ?>"
            ><?php echo e(__('system.'.$type)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    
    
    
    
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary"> <?php echo app('translator')->get('system.submit'); ?> </button>
</div>






<div class="input-group mb-3" id="option_image" style="display: none">
    <input
        name="attribute[image][key][]"
        type="text"
        class="form-control"
        id="key"
        placeholder="<?php echo e(__('block_template_attributes.key')); ?>"
        value="<?php echo e($block_template->name ?? old('key')); ?>"
    >
    <div class="custom-file">
        <input
            name="attribute[image][name][]"
            type="text"
            class="form-control"
            id=""
            placeholder="<?php echo e(__('block_template_attributes.name')); ?>"
            value="<?php echo e($block_template->name ?? old('name')); ?>"
        >
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input input"  name="attribute[image][default_value][]">
        <label class="custom-file-label" for="exampleInputFile"> <?php echo app('translator')->get('system.select image'); ?> </label>
    </div>
    <div class="input-group-append">
        
        <button class="btn btn-danger remove-input" type="button" style="z-index:1">Удалить</button>
    </div>
</div>







<div class="input-group mb-3" id="option_input" style="display: none">
    <input
        name="attribute[input][key][]"
        type="text"
        class="form-control"
        id="key"
        placeholder="<?php echo e(__('block_template_attributes.key')); ?>"
        value="<?php echo e($block_template->name ?? old('key')); ?>"
    >
    <input
        name="attribute[input][name][]"
        type="text"
        class="form-control"
        id="name"
        placeholder="<?php echo e(__('block_template_attributes.name')); ?>"
        value="<?php echo e($block_template->name ?? old('name')); ?>"
    >
    <input
        name="attribute[input][default_value][]"
        type="text"
        class="form-control input"
        placeholder="<?php echo e(__('block_template_attributes.default_value')); ?>"
        autocomplete="off"
        value=""
    >

    <div class="input-group-append">
        <button class="btn btn-danger remove-input" type="button" style="z-index:1">Удалить</button>
    </div>
</div>

<div class="input-group mb-3" id="option_textarea" style="display: none">
    <input
        name="attribute[textarea][key][]"
        type="text"
        class="form-control"
        id="key"
        placeholder="<?php echo e(__('block_template_attributes.key')); ?>"
        value="<?php echo e($block_template->name ?? old('key')); ?>"
    >
    <input
        name="attribute[textarea][name][]"
        type="text"
        class="form-control"
        id="name"
        placeholder="<?php echo e(__('block_template_attributes.name')); ?>"
        value="<?php echo e($block_template->name ?? old('name')); ?>"
    >
    <textarea
        class="form-control input"
        rows="3"
        placeholder="<?php echo e(__('block_contents.content')); ?>"
        name="attribute[textarea][default_value][]"
    ></textarea>
    <div class="input-group-append">
        <button class="btn btn-danger remove-input" type="button" style="z-index:1">Удалить</button>
    </div>
</div>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/block_templates/includes/create_update_form.blade.php ENDPATH**/ ?>