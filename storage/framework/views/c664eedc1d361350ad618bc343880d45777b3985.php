<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */

?>
<section class="main-slider swiper-container">
    <div class="main-slider__container swiper-wrapper">
        <?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="main-slider__slide swiper-slide">
                <div class="main-slider__content section-container">
                    <picture>
                        <source media="(max-width: 500px)" srcset="<?php echo e('/uploads/contents/' . $content->translate->image_path); ?>">
                        <img src=" <?php echo e('/uploads/contents/' . $content->translate->image_path); ?> " alt="">
                    </picture>
                    <div class="main-slider__desc">
                        <div class="main-slider__title">
                                <?php echo e($content->translate->title); ?>

                        </div>
                        <div class="main-slider__subtitle">
                                <?php echo e($content->translate->sub_title); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="main-slider__pagination">
        <div class="section-container">
            <div class="slide-start">01</div>
            <div class="swiper-pagination"></div>
            <div class="slide-end">0<?php echo e($block->contents->count()); ?></div>
        </div>
    </div>
</section>
<?php /**PATH /home/primus/prj/teach/resources/views/client/block_templates/templates/main_slider.blade.php ENDPATH**/ ?>