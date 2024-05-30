 <div class="container" id="pretraga">
    <form action="<?php echo e(route("search")); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="search"><?php echo e(trans('cruds.search.search_text')); ?></label>
            <input type="text" id="search" name="search" class="form-control" value="" />
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="category"><?php echo e(trans('cruds.search.category')); ?></label>
                <select id="category" name="category" class="form-control">
                    <option class="all" data-category="all" value="all">All</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option data-category="<?php echo e($category->id); ?>" value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="subcategory"><?php echo e(trans('cruds.search.subcategory')); ?></label>
                <select id="subcategory" name="subcategory" class="form-control">
                    <option class="all" value="all">All</option>
                    <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option class="category-<?php echo e($subcategory->parent_id); ?>" value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="tag"><?php echo e(trans('cruds.search.tag')); ?></label>
                <select id="tag" name="tag" class="form-control">
                    <option value="all">All</option>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div>
            <input class="btn btn-alicorn" type="submit" value="<?php echo e(trans('cruds.search.submit')); ?>">
        </div>
    </form>
</div><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/partials/search.blade.php ENDPATH**/ ?>