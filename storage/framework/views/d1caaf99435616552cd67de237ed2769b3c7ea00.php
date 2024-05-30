<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.article.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($article->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.title')); ?>

                        </th>
                        <td>
                            <?php echo e($article->title); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.slug')); ?>

                        </th>
                        <td>
                            <?php echo e($article->slug); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.short_text')); ?>

                        </th>
                        <td>
                            <?php echo $article->short_text; ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.full_text')); ?>

                        </th>
                        <td>
                            <?php echo $article->full_text; ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.categories')); ?>

                        </th>
                        <td>
                            <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label label-info label-many"><?php echo e($category->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tags
                        </th>
                        <td>
                            <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="label label-info label-many"><?php echo e($tags->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.article.fields.views_count')); ?>

                        </th>
                        <td>
                            <?php echo e($article->views_count); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/articles/show.blade.php ENDPATH**/ ?>