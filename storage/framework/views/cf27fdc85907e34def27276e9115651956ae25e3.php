<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.tag.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.tags.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name"><?php echo e(trans('cruds.tag.fields.name')); ?>*</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($tag) ? $tag->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.tag.fields.name_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('slug') ? 'has-error' : ''); ?>">
                <label for="slug"><?php echo e(trans('cruds.tag.fields.slug')); ?>*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="<?php echo e(old('slug', isset($tag) ? $tag->slug : '')); ?>" required>
                <?php if($errors->has('slug')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('slug')); ?>

                    </em>
                <?php endif; ?>
                <p class="helper-block">
                    <?php echo e(trans('cruds.tag.fields.slug_helper')); ?>

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
  $('input[name="name"]').change(function(e) {
    $.get('<?php echo e(route('tags.check_slug')); ?>', 
      { 'name': $(this).val() }, 
      function( data ) {
        $('input[name="slug"]').val(data.slug);
      }
    );
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/tags/create.blade.php ENDPATH**/ ?>