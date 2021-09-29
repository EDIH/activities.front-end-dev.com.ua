<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

<?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="about">
        <div class="about__container section-container">
            <div class="about__image">
                <picture>
                    <source media="(max-width: 500px)" srcset="">
                    <img src="<?php echo e('/uploads/contents/' . $content->translate->image_path); ?>" alt="">
                </picture>
            </div>
            <div class="about__content">
                <h2 class="about__title section-title">
                        <?php echo e($content->translate->title); ?>

                </h2>
                <div class="about__desc">
                    <p>
                            <?php echo e($content->translate->content); ?>

                    </p>
                    <?php $__currentLoopData = $content->translate->optionContent('textarea'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p>
                            <?php echo e($option); ?>

                        </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="about__lnk">
                        <?php echo $content->translate->link; ?>

                </div>
            </div>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/abz/resources/views/client/block_templates/templates/about.blade.php ENDPATH**/ ?>