<?php
/**
 * @var $page \App\Models\Pages;
 * @var $templates \Illuminate\Database\Eloquent\Collection;
 */
?>
<div class="modal fade" id="blockModalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <?php echo app('translator')->get('block.add'); ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if ($__env->exists('admin.block.includes.create_form', ['form' => 'create'])) echo $__env->make('admin.block.includes.create_form', ['form' => 'create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button
                    id="saveBlock"
                    type="button"
                    class="btn btn-primary"
                > <?php echo app('translator')->get('system.submit'); ?> </button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/block/includes/block_modal_dialog_create.blade.php ENDPATH**/ ?>