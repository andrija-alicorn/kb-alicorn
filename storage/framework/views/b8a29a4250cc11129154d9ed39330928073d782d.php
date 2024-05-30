<?php $__env->startSection('content'); ?>
<div class="col-md-8 padding-20">
    <div class="row">
        <!-- BREADCRUMBS -->
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('home')); ?>"><?php echo e(trans('panel.site_title')); ?></a>
                </li>
                
                <li class="active"><?php echo e($article->title); ?></li>
            </ol>
        </div>
        <!-- END BREADCRUMBS -->
        <!-- ARTICLE  -->
        <div class="panel panel-default">
            <div class="article-heading margin-bottom-5">
                <i class="fa fa-pencil-square-o"></i> <?php echo e($article->title); ?>

            </div>
            <div class="article-info">
                <div class="art-date">
                    <i class="fa fa-calendar-o"></i> <?php echo e($article->created_at); ?>

                </div>
               <?php if($article->categories): ?>
                <div class="article-content">
                    <div class="article-categories">
                        <b><?php echo e(trans('cruds.category.title')); ?>:</b>
                        <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('categories.show', [$category->slug, $category->id])); ?>" class="btn btn-default btn-o btn-sm"><?php echo e($category->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
            </div>
            <div class="article-content">
                <p><?php echo $article->short_text; ?></p>
                <?php echo $article->full_text; ?>

            </div>
            <?php if($article->tags_count): ?>
                <div class="article-content">
                    <div class="article-tags">
                        <b><?php echo e(trans('cruds.tag.title')); ?>:</b>
                        <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('tags.show', [$tag->slug, $tag->id])); ?>" class="btn btn-default btn-o btn-sm"><?php echo e($tag->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/articles/show.blade.php ENDPATH**/ ?>