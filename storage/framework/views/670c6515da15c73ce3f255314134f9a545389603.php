<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.category.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.category.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($category->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.category.fields.name')); ?>

                        </th>
                        <td>
                            <?php echo e($category->name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.category.fields.slug')); ?>

                        </th>
                        <td>
                            <?php echo e($category->slug); ?>

                        </td>
                    </tr>
                     <tr>
                        <th>
                            <?php echo e(trans('cruds.category.fields.parent')); ?>

                        </th>
                        <td>
                            <?php if(!$category->isTopLevel()): ?>
                                <?php echo e($category->parent->name); ?>

                            <?php else: ?>
                                None
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/categories/show.blade.php ENDPATH**/ ?>