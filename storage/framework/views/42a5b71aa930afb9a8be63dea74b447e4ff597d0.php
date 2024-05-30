<?php if($paginator->hasPages()): ?>
    <nav class="text-center">
        <ul class="pagination">
            <?php if(!$paginator->onFirstPage()): ?>
                <li class="enabled">
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                        <span aria-hidden="true">
                            <i class="fa fa-arrow-circle-left"></i> <?php echo app('translator')->get('pagination.previous'); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="disabled" aria-disabled="true"><span><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="active" aria-current="page">
                                <a><?php echo e($page); ?>

                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="enabled"><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li class="enabled">
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                        <span aria-hidden="true"><?php echo app('translator')->get('pagination.next'); ?>
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/partials/pagination.blade.php ENDPATH**/ ?>