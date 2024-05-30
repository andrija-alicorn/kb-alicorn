<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.faqQuestion.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.faq-questions.update", [$faqQuestion->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('category_id') ? 'has-error' : ''); ?>">
                <label for="category"><?php echo e(trans('cruds.faqQuestion.fields.category')); ?>*</label>
                <select name="category_id" id="category" class="form-control select2" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((isset($faqQuestion) && $faqQuestion->category ? $faqQuestion->category->id : old('category_id')) == $id ? 'selected' : ''); ?>><?php echo e($category); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('category_id')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('category_id')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('question') ? 'has-error' : ''); ?>">
                <label for="question"><?php echo e(trans('cruds.faqQuestion.fields.question')); ?>*</label>
                <textarea id="question" name="question" class="form-control " required><?php echo e(old('question', isset($faqQuestion) ? $faqQuestion->question : '')); ?></textarea>
                <?php if($errors->has('question')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('question')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.faqQuestion.fields.question_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('answer') ? 'has-error' : ''); ?>">
                <label for="answer"><?php echo e(trans('cruds.faqQuestion.fields.answer')); ?>*</label>
                <textarea id="answer" name="answer" class="form-control faqEditor"><?php echo e(old('answer', isset($faqQuestion) ? $faqQuestion->answer : '')); ?></textarea>
                <?php if($errors->has('answer')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('answer')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.faqQuestion.fields.answer_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/faqQuestions/edit.blade.php ENDPATH**/ ?>