<?php
/**
 * @var $page \App\Models\Pages;
 * @var $templates \Illuminate\Database\Eloquent\Collection;
 */
?>

<div class="modal fade" id="contentFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" id="modal_dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <?php echo app('translator')->get('block.content'); ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row" id="modal_body">







            </div>
            <div class="modal-footer">

                <button
                    id="saveAndContinueContent"
                    type="button"
                    class="btn btn-primary"
                > <?php echo app('translator')->get('block_contents.submit_and_continue'); ?> </button>
                <button
                    id="saveContent"
                    type="button"
                    class="btn btn-primary"
                > <?php echo app('translator')->get('system.submit'); ?> </button>
            </div>
        </div>
    </div>
</div>









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
<?php /**PATH /home/primus/prj/abz/resources/views/admin/content/includes/content_modal_dialog.blade.php ENDPATH**/ ?>