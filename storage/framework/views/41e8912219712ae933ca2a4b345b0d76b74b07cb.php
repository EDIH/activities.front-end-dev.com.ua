
<form
    role="form"
    method="post"
    enctype="multipart/form-data"
    id="blockTemplateLoadForm"
    action="<?php echo e(route('admin.block_templates.load')); ?>"
>
    <div class="alert alert-danger" style="display: none;">
    </div>
    <div class="form-group">
        <label for="template"> <?php echo app('translator')->get('system.template'); ?> </label>
        <?php if(isset($block_template->image_path)): ?>
            <img class="img-fluid pad" src="<?php echo e('/uploads/block_templates/thumbs/' . $block_template->image_path); ?>" alt="Preview">
        <?php endif; ?>
        <div class="input-group">
            <div class="custom-file">
                <input
                    type="file"
                    class="custom-file-input"
                    id="template"
                    name="template"
                    accept=".zip"
                >
                <label class="custom-file-label" for="exampleInputFile"> <?php echo app('translator')->get('system.select template'); ?> </label>
            </div>
            <div class="input-group-append">
                <span
                    class="input-group-text"
                    id="loadBlockTemplate"
                    style="display: none;"
                >
                    <?php echo app('translator')->get('system.upload'); ?>
                </span>
            </div>
        </div>
    </div>
</form>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/block_templates/includes/load_form.blade.php ENDPATH**/ ?>