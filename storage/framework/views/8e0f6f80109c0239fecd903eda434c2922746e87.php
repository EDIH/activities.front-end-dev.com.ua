<?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hyperrealism">
        <div class="hyperrealism__container section-container">
            <div class="hyperrealism__image">
                <picture>
                    <source media="(max-width: 500px)" srcset="<?php echo e('/uploads/contents/' . $content->translate->image_path); ?>">
                    <img src="<?php echo e('/uploads/contents/' . $content->translate->image_path); ?>" alt="">
                </picture>
            </div>
            <div class="hyperrealism__content">
                <h2 class="hyperrealism__title section-title">
                    <?php echo e($content->translate->title); ?>

                </h2>
                <div class="hyperrealism__desc">
                    <p>
                        <?php echo $content->translate->content; ?>

                    </p>
                    <?php $__currentLoopData = $content->translate->optionContent('textarea'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p>
                            <?php echo $text; ?>

                        </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/teach/resources/views/client/block_templates/templates/hyperrealism.blade.php ENDPATH**/ ?>