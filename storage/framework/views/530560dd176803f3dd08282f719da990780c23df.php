<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(trans('panel.site_title')); ?></title>
        <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>?ver=<?php echo e(filemtime(public_path('css/style.css'))); ?>" rel="stylesheet">
    </head>

    <body>

        <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(!isset($exception)): ?>
            <div class="searchfield bg-hed-six">
                <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
                     <a class="logo" href="/">
                        <img src="<?php echo e(asset('images/alicorn-logo.png')); ?>" alt="logo">
                    </a>
                    <div class="row text-center margin-bottom-20">
                        <h1 class="white"><?php echo e(trans('panel.site_title')); ?></h1>
                        <span class="nested"><?php echo e(trans('panel.site_tagline')); ?></span>
                    </div>
                </div>
                <?php if(isset($categories) && isset($subcategories) && isset($tags)): ?>
                   <?php echo $__env->make('partials.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="container featured-area-default padding-30">
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>

                <?php if(!isset($exception)): ?>
                    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>

        <?php echo $__env->yieldContent('about'); ?>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script src="<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>?ver=<?php echo e(filemtime(public_path('js/app.js'))); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
    </body>
</html><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/layouts/main.blade.php ENDPATH**/ ?>