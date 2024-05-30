<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('cruds.article.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.articles.update", [$article->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
                <label for="title"><?php echo e(trans('cruds.article.fields.title')); ?>*</label>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo e(old('title', isset($article) ? $article->title : '')); ?>" required>
                <?php if($errors->has('title')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('title')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.article.fields.title_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('slug') ? 'has-error' : ''); ?>">
                <label for="slug"><?php echo e(trans('cruds.article.fields.slug')); ?>*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="<?php echo e(old('slug', isset($article) ? $article->slug : '')); ?>" required>
                <?php if($errors->has('slug')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('slug')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.article.fields.slug_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('short_text') ? 'has-error' : ''); ?>">
                <label for="short_text"><?php echo e(trans('cruds.article.fields.short_text')); ?></label>
                <textarea id="short_text" name="short_text" class="form-control "><?php echo e(old('short_text', isset($article) ? $article->short_text : '')); ?></textarea>
                <?php if($errors->has('short_text')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('short_text')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.article.fields.short_text_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('full_text') ? 'has-error' : ''); ?>">
                <label for="full_text"><?php echo e(trans('cruds.article.fields.full_text')); ?></label>
                <textarea id="full_text" name="full_text" class="form-control ckeditor"><?php echo e(old('full_text', isset($article) ? $article->full_text : '')); ?></textarea>
                <?php if($errors->has('full_text')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('full_text')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.article.fields.full_text_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('categories') ? 'has-error' : ''); ?>">
                <label class="category-label"><?php echo e(trans('cruds.article.fields.categories')); ?></label>
                    <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="parent-category" >
                            <input type="checkbox" id="category-<?php echo e($parent->id); ?>" multiple="multiple" name="categories[]" value="<?php echo e($parent->id); ?>" <?php echo e((in_array($parent->id, old('categories', [])) || isset($article) && $article->categories->contains($parent->id)) ? 'checked' : ''); ?> />
                            <label for="category-<?php echo e($parent->id); ?>"><?php echo e($parent->name); ?></label>
                        </div>
                         <?php $__currentLoopData = $parent->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="child-category">
                                <input type="checkbox" id="category-<?php echo e($child->id); ?>" multiple="multiple" name="categories[]" value="<?php echo e($child->id); ?>" <?php echo e((in_array($child->id, old('categories', [])) || isset($article) && $article->categories->contains($child->id)) ? 'checked' : ''); ?> />
                                <label for="category-<?php echo e($child->id); ?>"><?php echo e($child->name); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($errors->has('tags')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('tags')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.article.fields.tags_helper')); ?>

                </p>
            </div>

            <div class="form-group <?php echo e($errors->has('tags') ? 'has-error' : ''); ?>">
                <label for="tags"><?php echo e(trans('cruds.article.fields.tags')); ?>

                    <span class="btn btn-info btn-xs select-all"><?php echo e(trans('global.select_all')); ?></span>
                    <span class="btn btn-info btn-xs deselect-all"><?php echo e(trans('global.deselect_all')); ?></span></label>
                <select name="tags[]" id="tags" class="form-control select2" multiple="multiple">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e((in_array($id, old('tags', [])) || isset($article) && $article->tags->contains($id)) ? 'selected' : ''); ?>><?php echo e($tags); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('tags')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('tags')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.article.fields.tags_helper')); ?>

                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  $('input[name="title"]').change(function(e) {
    $.get('<?php echo e(route('articles.check_slug')); ?>', 
      { 'title': $(this).val() }, 
      function( data ) {
        $('input[name="slug"]').val(data.slug);
      }
    );
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/articles/edit.blade.php ENDPATH**/ ?>