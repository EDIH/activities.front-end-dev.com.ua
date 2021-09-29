
<?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
    <?php $__currentLoopData = $content->translations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $translate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table class="table table-bordered shadow-lg block_content_id_<?php echo e($content->id); ?>">
            <tbody>
            <tr>
                <td class="p-1">
                    <a
                        href="#"
                        class="btn-xs btn-danger remove-content"
                        data-content_id="<?php echo e($content->id); ?>"
                        data-toggle="modal"
                        data-target="#confirmDeleteContent"
                    ><i class="fas fa-trash"></i></a>
                    <a
                        href="#"
                        class="btn-xs btn-primary edit-content"
                        data-block_id="<?php echo e($block->id); ?>"
                        data-url="<?php echo e(route('admin.contents.edit', ['content' => $content])); ?>"
                        data-toggle="modal"
                        
                    ><i class="fas fa-pen"></i></a>
                </td>
                <td class="p-1">
                </td>
            </tr>
            <?php if($translate->title): ?>
                <tr>
                    <td class="p-1"><small> <?php echo app('translator')->get('block_contents.title'); ?> </small></td>
                    <td class="p-1"><?php echo e($translate->title); ?></td>
    
                </tr>
            <?php endif; ?>

            <?php if($translate->sub_title): ?>
                <tr>
                    <td class="p-1"><small> <?php echo app('translator')->get('block_contents.sub_title'); ?> </small></td>
                    <td class="p-1"><?php echo e(\Illuminate\Support\Str::limit($translate->sub_title, 25)); ?></td>
    
                </tr>
            <?php endif; ?>

            <?php if($translate->content): ?>
                <tr>
                    <td class="p-1"> <small> <?php echo app('translator')->get('block_contents.content'); ?>  </small></td>
                    <td class="p-1"><?php echo \Illuminate\Support\Str::limit($translate->content, 25); ?> </td>
    
                </tr>
            <?php endif; ?>

            <?php if($translate->link): ?>
                <tr>

                    <td class="p-1"><small> <?php echo app('translator')->get('block_contents.link'); ?> </small></td>
                    <td class="p-1"><?php echo $translate->link; ?></td>
    
                </tr>
            <?php endif; ?>
            <?php if($translate->image_path): ?>
                <tr>
                    <td class="p-1"><small> <?php echo app('translator')->get('block_contents.image'); ?> </small></td>
                    <td class="p-1"><img src="<?php echo e('/uploads/contents/thumbs/' . $translate->image_path); ?>" class="img-fluid"></td>
    
                </tr>
            <?php endif; ?>
            <?php if($translate->options): ?>
                <?php $__currentLoopData = $translate->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="p-1"><small> <?php echo e(__('system.' . $input_types[$option->type]) . "[$option->id]"); ?></small></td>
                        <td class="p-1">
                            <?php switch($option->type):
                                case (0): ?>
                                    <img src="<?php echo e('/uploads/content_options/thumbs/' . $option->value); ?>" class="img-fluid" alt="">
                                    <?php break; ?>

                                <?php case (1): ?>
                                    <?php echo e($option->value); ?>

                                    <?php break; ?>

                                <?php case (2): ?>
                                    <?php echo \Illuminate\Support\Str::limit($option->value, 25); ?>

                                    <?php break; ?>

                            <?php endswitch; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/content/content_list.blade.php ENDPATH**/ ?>