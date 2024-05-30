
<div class="container-fluid footer marg30">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading"><?php echo e(trans('copy.how_it_works')); ?></div>
                <div class="footer-body">
                    <p><?php echo e(trans('copy.footer_explaination1')); ?> </p>
                    <p><?php echo e(trans('copy.footer_explaination2')); ?> </p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading"><?php echo e(trans('cruds.category.title')); ?></div>
                <div class="footer-body">
                    <ul>
                        <?php $__currentLoopData = $footerCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('categories.show', [$category->slug, $category->id])); ?>"><?php echo e($category->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading"><p><?php echo e(trans('copy.popular_articles')); ?> </p></div>
                <div class="footer-body">
                    <ul>
                        <?php $__currentLoopData = $popularArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('articles.show', [$article->slug, $article->id])); ?>"><?php echo e($article->title); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- COPYRIGHT INFO -->
<div class="container-fluid footer-copyright marg30">
    <div class="container">
        <div class="pull-left">
            Copyright <a href="https://alicorn.me/" target="_blank">Alicorn doo</a>
        </div>
        <div class="pull-right">
            <a href="https://www.facebook.com/alicorn.me/" target="_blank">
                <i class="fa fa-facebook"></i> &nbsp;
            </a>
            <a href="https://www.instagram.com/alicorn.me/ target="_blank">
                <i class="fa fa-instagram"></i> &nbsp;
            </a>
            <a href="https://www.linkedin.com/company/alicorn.me/mycompany/" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</div>
<!-- END COPYRIGHT INFO --><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/partials/footer.blade.php ENDPATH**/ ?>