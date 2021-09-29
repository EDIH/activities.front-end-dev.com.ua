<?php
/**
 * @var $translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

<?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $translate = $content->translate
    ?>
    <section class="text-block">
        <div class="text-block__container section-container">
            <div class="text-block__content">
                <p>
                    <?php if($translate->content): ?>
                        <?php echo e($translate->content); ?>

                    <?php endif; ?>
                </p>
            </div>
            <div class="text-block__link">
                <?php if($translate->link): ?>
                    <?php echo $translate->link; ?>

                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/abz/resources/views/client/block_templates/templates/text_block.blade.php ENDPATH**/ ?>