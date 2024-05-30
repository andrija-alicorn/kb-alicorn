<div class="container-fluid">
    <div class="navigation">
        <div class="row">
            <ul class="topnav">
                <li></li>
                <li>
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="fa fa-home"></i> <?php echo e(trans('global.home')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('articles.index')); ?>">
                        <i class="fa fa-file-text-o"></i> <?php echo e(trans('cruds.article.title')); ?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('faq.index')); ?>">
                        <i class="fa fa-lightbulb-o"></i> <?php echo e(trans('cruds.faqManagement.title')); ?>

                    </a>
                </li>
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/partials/nav.blade.php ENDPATH**/ ?>