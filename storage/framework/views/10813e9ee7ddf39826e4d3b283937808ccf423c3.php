<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

<?php $__currentLoopData = $block->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    ______________-
    <section class="about">
        <div class="about__container section-container">
            <div class="about__image">
                <picture>
                    <source media="(max-width: 500px)" srcset="">

                </picture>
            </div>
            <div class="about__content">
                <h2 class="about__title section-title">

                </h2>
                <div class="about__desc">
                    <p>

                    </p>





                </div>
                <div class="about__lnk">

                </div>
            </div>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/primus/prj/teach/resources/views/client/block_templates/templates/about.blade.php ENDPATH**/ ?>