<?php if(count($breadcrumbs) > 0): ?>
    <section class="content-header">
        <!-- Структура согласно AdminLTE -->
        <h1>
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->last): ?>
                    <?php echo e($item['label']); ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </h1>

        <ol class="breadcrumb">
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php if($item['url'] ?? false): ?>
                        <a href="<?php echo e($item['url']); ?>">
                            <?php echo e($item['label']); ?>  <?php echo "&nbsp;"; ?>

                        </a>
                    <?php else: ?>
                        <span>
                            <?php echo e($item['label']); ?>

                        </span>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </section>
<?php endif; ?>
<?php /**PATH /home/primus/prj/abz/resources/views/breadcrumbs.blade.php ENDPATH**/ ?>