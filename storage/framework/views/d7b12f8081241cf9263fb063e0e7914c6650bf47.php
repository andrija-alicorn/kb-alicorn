<?php $__env->startSection('content'); ?>
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-heading">
                <?php echo e(trans('copy.faq_title')); ?>

            </div>
            <hr class="style-three">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordionCategories" role="tablist" aria-multiselectable="true">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingCategory<?php echo e($category->id); ?>">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordionCategories" href="#collapseCategory<?php echo e($category->id); ?>" aria-expanded="true" aria-controls="collapseCategory<?php echo e($category->id); ?>">
                                            <?php echo e($category->category); ?>

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseCategory<?php echo e($category->id); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCategory<?php echo e($category->id); ?>">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordionQuestions<?php echo e($category->id); ?>" role="tablist" aria-multiselectable="true">
                                            <?php $__currentLoopData = $category->faqQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingQuestion<?php echo e($question->id); ?>">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordionQuestions<?php echo e($category->id); ?>" href="#collapseQuestion<?php echo e($question->id); ?>" aria-expanded="true" aria-controls="collapseQuestion<?php echo e($question->id); ?>">
                                                                <?php echo e($question->question); ?>

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseQuestion<?php echo e($question->id); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQuestion<?php echo e($question->id); ?>">
                                                        <div class="panel-body">
                                                            <?php echo $question->answer; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/faq.blade.php ENDPATH**/ ?>