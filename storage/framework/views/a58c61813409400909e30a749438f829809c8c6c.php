<?php $__env->startSection('content'); ?>
<div class="col-md-8 padding-20 kb-homepage">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fb-heading">
                <?php echo e(trans('copy.top_level_categories')); ?>

            </h2>
            <hr class="style-three">
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($category->articles_count > 0): ?>
                        <div class="col-md-6 margin-bottom-20">
                            <div class="fat-heading-abb">
                                <a href="<?php echo e(route('categories.show', [$category->slug, $category->id])); ?>">
                                    <i class="fa fa-folder"></i> <?php echo e($category->name); ?>

                                    <span class="cat-count">(<?php echo e($category->articles_count); ?>)</span>
                                </a>
                            </div>
                            <div class="fat-content-small padding-left-30">
                                <ul>
                                    <?php $__currentLoopData = $category->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->index >= 5): ?>
                                            <?php break; ?>
                                        <?php endif; ?>
                                        <li>
                                            <a href="<?php echo e(route('articles.show', [$article->slug, $article->id])); ?>">
                                                <i class="fa fa-file-text-o"></i> <?php echo e($article->title); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
        <?php echo e($categories->links('partials.pagination')); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('about'); ?>
<div class="container-fluid featured-area-grey padding-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-us">
                <h2 class="fb-heading">
                    <?php echo e(trans('copy.about_us')); ?>

                </h2>
                <div class="fb-content">
                    <p>
                        <?php echo e(trans('copy.about_us1')); ?>

                    </p>
                    <p>
                       <?php echo e(trans('copy.about_us2')); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/index.blade.php ENDPATH**/ ?>