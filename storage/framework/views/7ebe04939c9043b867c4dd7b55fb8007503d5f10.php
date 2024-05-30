<?php $__env->startSection('content'); ?>
<div class="col-md-12 padding-20 text-center">
	<img src="<?php echo e(asset('images/404.png')); ?>" alt="404" width="200px" height="200px">
	<h1>Oops, looks like we could not find the page you requested</h1>
	<br>
	<a href="<?php echo e(route('home')); ?>" class="btn btn-info btn-wide">
		<i class="fa fa-arrow-circle-left"></i> Back to home page</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/errors/404.blade.php ENDPATH**/ ?>