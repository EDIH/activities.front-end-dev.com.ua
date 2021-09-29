<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */

?>
<?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="special">
        <div class="special__content">
            <h2 class="special__title section-title">
                <?php echo e($content->translate->title); ?>

            </h2>
            <div class="special__desc">
                <p>
                    <?php echo $content->translate->content; ?>

                </p>
                <?php $__currentLoopData = $content->translate->optionContent('textarea'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p>
                        <?php echo $text; ?>

                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="special__lnk">
                <?php echo $content->translate->link; ?>

            </div>
        </div>
        <div class="special__image">
            <picture>
                <source media="(max-width: 500px)" srcset="<?php echo e('/uploads/contents/' . $content->translate->image_path); ?>">
                <img src="<?php echo e('/uploads/contents/' . $content->translate->image_path); ?>" alt="">
            </picture>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/abz/resources/views/client/block_templates/templates/special.blade.php ENDPATH**/ ?>