
<form id="blockCreateForm"

>
    <div class="alert alert-danger" style="display: none;">
    </div>









    <div class="form-group">
        <label for="name"> <?php echo app('translator')->get('block_template_attributes.name'); ?> </label>
        <input
            id="name"
            name="name"
            type="text"
            class="form-control"
            placeholder="<?php echo e(__('block_template_attributes.name_placeholder')); ?>"
        >
    </div>
    <div class="form-group">
        <label for="default_value"> <?php echo app('translator')->get('block_template_attributes.default_value'); ?> </label>
        <input
            id="default_value"
            name="default_value"
            type="text"
            class="form-control"
            placeholder="<?php echo e(__('block_template_attributes.default_value_placeholder')); ?>"
            disabled
        >
    </div>
    <div class="form-group">
        <label> <?php echo app('translator')->get('block_template_attributes.type'); ?> </label>
        <select
            id="type"
            class="form-control select2bs4 select2-hidden-accessible"
            name="type"
            style="width: 100%;"


            aria-hidden="true"
        >
            <option value="-1" selected disabled hidden> <?php echo app('translator')->get('block_template_attributes.select_type'); ?> </option>
            <?php $__currentLoopData = $input_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="option_<?php echo e($type); ?>"
                ><?php echo e(__('system.'.$type)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</form>









<div class="input-group mb-3" id="option_image" style="display: none">
    <div class="custom-file">
        <input type="file" id="optionFile" class="custom-file-input input"  name="option[image][]">
        <label class="custom-file-label" for="optionFile"> <?php echo app('translator')->get('system.select image'); ?> </label>
    </div>
    <div class="input-group-append">
        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
    </div>
</div>







<div class="input-group mb-3" id="option_input" style="display: none">
    <input

        name="option[input][]"
        type="text"
        class="form-control input"
        placeholder="<?php echo e(__('system.input')); ?>"
        autocomplete="off"
    >
    <div class="input-group-append">
        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
    </div>
</div>

<div class="input-group mb-3" id="option_textarea" style="display: none">
    <textarea
        class="form-control input"
        rows="3"
        placeholder="<?php echo e(__('block_contents.content')); ?>"
        name="option[textarea][]"
    ></textarea>
    <div class="input-group-append">
        <a href="#" class="btn btn-danger remove-input"><i class="fas fa-trash"></i></a>
    </div>
</div>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/block_template_attributes/includes/create_form.blade.php ENDPATH**/ ?>