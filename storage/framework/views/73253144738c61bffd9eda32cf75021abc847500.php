<div class="col-md-4 padding-20">
    <div class="row margin-bottom-30">
        <div class="col-md-12 ">
            <div class="support-container">
                <h2 class="support-heading"><?php echo e(trans('copy.need_more_support')); ?></h2>
                <p>
                    <?php echo e(__('copy.stackoverflow')); ?>

                </p>
                <a href="https://stackoverflow.com/" target="_blank">Stackoverflow</a>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                <?php echo e(trans('copy.popular_articles')); ?>

            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    <?php $__currentLoopData = $popularArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('articles.show', [$article->slug, $article->id])); ?>">
                                <i class="fa fa-file-text-o"></i> <?php echo e($article->title); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                <?php echo e(trans('copy.latest_articles')); ?>

            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    <?php $__currentLoopData = $latestArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('articles.show', [$article->slug, $article->id])); ?>">
                                <i class="fa fa-file-text-o"></i> <?php echo e($article->title); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                <?php echo e(trans('copy.popular_tags')); ?>

            </div>
            <hr class="style-three">
            <div class="fat-content-tags padding-left-10">
                <?php $__currentLoopData = $popularTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('tags.show', [$tag->slug, $tag->id])); ?>" class="btn btn-default btn-o btn-sm"><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>