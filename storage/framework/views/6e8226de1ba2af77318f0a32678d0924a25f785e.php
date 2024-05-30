<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.faqCategory.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.faq-categories.update", [$faqCategory->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('category') ? 'has-error' : ''); ?>">
                <label for="category"><?php echo e(trans('cruds.faqCategory.fields.category')); ?>*</label>
                <input type="text" id="category" name="category" class="form-control" value="<?php echo e(old('category', isset($faqCategory) ? $faqCategory->category : '')); ?>" required>
                <?php if($errors->has('category')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('category')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.faqCategory.fields.category_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/faqCategories/edit.blade.php ENDPATH**/ ?>