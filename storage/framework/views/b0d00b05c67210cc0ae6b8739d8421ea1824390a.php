<?php $__env->startSection('content'); ?>
<div class="col-md-8 padding-20">
    <div class="row">
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
                <li class="active"><?php echo e(trans('cruds.tag.title_singular')); ?>: <?php echo e($tag->name); ?></li>
            </ol>
        </div>

        <div class="fb-heading">
            <i class="fa fa-folder"></i> <?php echo e(trans('cruds.tag.title_singular')); ?>: <?php echo e($tag->name); ?>

            <span class="cat-count">(<?php echo e($tag->articles_count); ?>)</span>
        </div>
        <hr class="style-three">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                <div class="article-heading-abb">
                    <a href="<?php echo e(route('articles.show', [$article->slug, $article->id])); ?>">
                        <i class="fa fa-pencil-square-o"></i> <?php echo e($article->title); ?> </a>
                </div>
                <div class="article-info">
                    <div class="art-date">
                        <i class="fa fa-calendar-o"></i> <?php echo e($article->created_at); ?>

                    </div>
                    <?php if($article->categories->count()): ?>
                        <div class="art-category">
                            <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <a href="<?php echo e(route('categories.show', [$item->slug, $item->id])); ?>">
                                    <i class="fa fa-folder"></i> <?php echo e($item->name); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="article-content">
                    <p class="block-with-text">
                        <?php echo e($article->short_text); ?>

                    </p>
                </div>
                <div class="article-read-more">
                    <a href="<?php echo e(route('articles.show', [$article->slug, $article->id])); ?>" class="btn btn-default btn-wide"><?php echo e(trans('copy.read_more')); ?></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo e($articles->links('partials.pagination')); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/tags/show.blade.php ENDPATH**/ ?>