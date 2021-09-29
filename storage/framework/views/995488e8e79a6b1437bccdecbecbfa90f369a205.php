<?php
/**
* @var $page \App\Models\Pages;
* @var $content \App\Models\Block_contents;
* @var $templates \Illuminate\Database\Eloquent\Collection;
*/
?>

<form
    id="contentForm"
    action="<?php echo e(route('admin.contents.create', ['block' => $block])); ?>"
    class="<?php if($block->contents->count()): ?> col-md-6 <?php else: ?> col-md-12 <?php endif; ?>"
    enctype="multipart/form-data">
    <!-- Default switch -->










    <div class="custom-control custom-switch">
        <input name="enabled" type="checkbox" class="custom-control-input" id="customSwitches" checked>
        <label class="custom-control-label" for="customSwitches"> <?php echo app('translator')->get('system.disable'); ?> </label>
    </div>















    <input
        type="hidden"
        name="block_id"
        id="block_id"
        value=""
    >
    <div class="alert alert-danger" style="display: none;">
    </div>

    <div class="form-group">
        <label for="order"> <?php echo app('translator')->get('block_contents.title'); ?> </label>
        <input
            id="title"
            name="title"
            type="text"
            class="form-control"
            placeholder="<?php echo e(__('block_contents.title')); ?>"
            autocomplete="off"
        >
    </div>

    <div class="form-group">
        <label for="order"> <?php echo app('translator')->get('block_contents.sub_title'); ?> </label>
        <input
            id="sub_title"
            name="sub_title"
            type="text"
            class="form-control"
            placeholder="<?php echo e(__('block_contents.sub_title')); ?>"
            autocomplete="off"
        >
    </div>

    <div class="form-group">
        <label for="order"> <?php echo app('translator')->get('block_contents.link'); ?> </label>
        <input
            id="link"
            name="link"
            type="text"
            class="form-control"
            placeholder="<?php echo e(__('block_contents.link')); ?>"
            autocomplete="off"
        >
    </div>

    <div class="form-group" id="textarea">
        <label for="content"> <?php echo app('translator')->get('block_contents.content'); ?> </label>
        <textarea
            class="form-control input"
            rows="3"
            placeholder="<?php echo e(__('block_contents.content')); ?>"
            name="content"
            id="content"
        ></textarea>
    </div>

    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input input"  name="image" id="file_<?php echo e($block->id); ?>">
            <label class="custom-file-label" for="file_<?php echo e($block->id); ?>"> <?php echo app('translator')->get('system.select image'); ?> </label>
        </div>
    </div>


    <div class="form-group option-fields">

    </div>

    <div class="form-group">
        <label for="selectType"> <?php echo app('translator')->get('block_option_contents.add_value'); ?> </code></label>
        <select class="custom-select form-control-border" id="type">
            <option value="-1" selected disabled hidden> <?php echo app('translator')->get('block_option_contents.select_type'); ?> </option>
            <?php $__currentLoopData = $input_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="option_<?php echo e($type); ?>"
                ><?php echo e(__('system.'.$type)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

</form>

<div
    id="contentList"
    class="<?php if($block->contents->count()): ?> col-md-6 <?php endif; ?>">
    <?php echo $__env->make('admin.content.content_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php /**PATH /home/primus/prj/abz/resources/views/admin/content/includes/create_form.blade.php ENDPATH**/ ?>