<section class="digits">
    <div class="digits__container section-container">
        <?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="digits__item">
                <div class="digits__digit">
                    <?php echo $content->translate->content; ?>

                </div>
                <div class="digits__title">
                    <?php echo e($content->translate->title); ?>

                </div>
                <div class="digits__desc">
                    <?php echo e($content->translate->sub_title); ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH /home/primus/prj/abz/resources/views/client/block_templates/templates/digits.blade.php ENDPATH**/ ?>