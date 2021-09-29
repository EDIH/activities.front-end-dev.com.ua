<?php
/**
 * @var $model \App\Models\Pages;
 * @var $pages \Illuminate\Database\Eloquent\Collection;
 * @var $languages \Illuminate\Database\Eloquent\Collection;
 */
?>
<?php echo csrf_field(); ?>
<div class="card-body">
    <?php if($model->parent_page_id || !$model->id): ?>
        <div class="form-group">
            <label> <?php echo app('translator')->get('pages.parent_page_id'); ?> </label>
            <select
                class="form-control select2bs4 select2-hidden-accessible"
                name="parent_page_id"
                style="width: 100%;"
                data-select2-id="17"
                tabindex="-1"
                aria-hidden="true"

            >
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value="<?php echo e($page->id); ?>"
                        <?php if($page->parent_page_id == $model->id): ?> selected="selected" <?php endif; ?>
                        <?php if($model->id == $page->id): ?> disabled <?php endif; ?>
                        data-select2-id="<?php echo e($page->id); ?>"
                    >
                        <?php echo e($page->title); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <?php elseif($model->id): ?>
        <label for="">У этой страницы не можеть быть другого родитильского раздела</label>
    <?php else: ?>
        <label for="">Корневая страница</label>
    <?php endif; ?>

    <div class="form-group">
        <label for="image"> <?php echo app('translator')->get('system.image'); ?> </label>
        <?php if($model->image_path): ?>
            <img class="img-fluid pad" src="<?php echo e('/uploads/pages/thumbs/' . $model->image_path); ?>" alt="Photo">
        <?php endif; ?>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="exampleInputFile"> <?php echo app('translator')->get('system.select image'); ?> </label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text" id=""> <?php echo app('translator')->get('system.upload'); ?> </span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-7 col-sm-9">
            <div class="tab-content" id="vert-tabs-right-tabContent">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade <?php if(!$count): ?> show active <?php endif; ?>" id="vert-tabs-right-<?php echo e($lang->iso); ?>" role="tabpanel" aria-labelledby="vert-tabs-right-<?php echo e($lang->iso); ?>-tab">
                        <div class="form-check">
                            <input
                                name="properties[<?php echo e($lang->iso); ?>][enabled]"
                                type="checkbox"
                                class="form-check-input"
                                id="enabled_<?php echo e($lang->iso); ?>"
                                <?php if($lang->enabled): ?> checked
                                <?php else: ?> disabled
                                <?php endif; ?>
                                value="<?php echo e($model->property($lang->id) ? $model->property($lang->id)->enabled : old('properties.'.$lang->iso.'.enabled', true)); ?>"
                            >
                            <label class="form-check-label" for="enabled_<?php echo e($lang->iso); ?>"> <?php echo app('translator')->get('system.status'); ?> </label>
                        </div>
                        <div class="form-group">
                            <label for="title_<?php echo e($lang->iso); ?>"> <?php echo app('translator')->get('system.title'); ?> </label>
                            <input
                                name="properties[<?php echo e($lang->iso); ?>][title]"
                                type="text"
                                class="form-control"
                                id="title_<?php echo e($lang->iso); ?>"
                                placeholder="Title"
                                value="<?php echo e($model->property($lang->id) ? $model->property($lang->id)->title : old('properties.'.$lang->iso.'.title')); ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label for="keywords_<?php echo e($lang->iso); ?>"> <?php echo app('translator')->get('pages.keywords'); ?> </label>
                            <input
                                name="properties[<?php echo e($lang->iso); ?>][keywords]"
                                type="text"
                                class="form-control"
                                id="keywords_<?php echo e($lang->iso); ?>"
                                placeholder="Keywords"
                                value="<?php echo e($model->property($lang->id) ? $model->property($lang->id)->keywords : old('properties.'.$lang->iso.'.keywords')); ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label> <?php echo app('translator')->get('pages.description'); ?> </label>
                            <textarea
                                name="properties[<?php echo e($lang->iso); ?>][description]"
                                class="form-control"
                                rows="3"
                                placeholder="Enter ..."
                            >
                                <?php echo e($model->property($lang->id) ? $model->property($lang->id)->description : old('properties.'.$lang->iso.'.description')); ?>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="h1_<?php echo e($lang->iso); ?>">h1</label>
                            <input
                                name="properties[<?php echo e($lang->iso); ?>][h1]"
                                type="text"
                                class="form-control"
                                id="h1_<?php echo e($lang->iso); ?>"
                                placeholder="h1"
                                value="<?php echo e($model->property($lang->id) ? $model->property($lang->id)->h1 : old('properties.'.$lang->iso.'.h1')); ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label for="h2_<?php echo e($lang->iso); ?>">h2</label>
                            <input
                                name="properties[<?php echo e($lang->iso); ?>][h2]"
                                type="text"
                                class="form-control"
                                id="h2_<?php echo e($lang->iso); ?>"
                                placeholder="h2"
                                value="<?php echo e($model->property($lang->id) ? $model->property($lang->id)->h2 : old('properties.'.$lang->iso.'.h2')); ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label for="alias_<?php echo e($lang->iso); ?>"> <?php echo app('translator')->get('pages.alias'); ?> </label>
                            <input
                                name="properties[<?php echo e($lang->iso); ?>][alias]"
                                type="text"
                                class="form-control"
                                id="alias_<?php echo e($lang->iso); ?>"
                                placeholder="alias"
                                value="<?php echo e($model->property($lang->id) ? $model->property($lang->id)->alias : old('properties.'.$lang->iso.'.alias')); ?>"
                            >
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-5 col-sm-3">
            <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        class="nav-link <?php if(!$count): ?> active <?php endif; ?>"
                        id="vert-tabs-right-<?php echo e($lang->iso); ?>-tab"
                        data-toggle="pill" href="#vert-tabs-right-<?php echo e($lang->iso); ?>"
                        role="tab" aria-controls="vert-tabs-right-<?php echo e($lang->iso); ?>"
                        aria-selected="<?php echo e((!$count) ? 'true' : 'false'); ?>">
                            <?php echo e($lang->iso); ?> <?php if(!$lang->enabled): ?> (<?php echo app('translator')->get('system.disable'); ?>) <?php endif; ?>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary"> <?php echo app('translator')->get('system.submit'); ?> </button>
</div>
<?php /**PATH /home/primus/prj/teach/resources/views/admin/pages/includes/create_update_form.blade.php ENDPATH**/ ?>