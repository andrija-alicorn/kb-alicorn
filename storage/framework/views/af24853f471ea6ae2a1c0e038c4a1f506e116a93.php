<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.articles.create")); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.article.title_singular_obj')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
       <?php echo e(trans('global.list')); ?> <?php echo e(trans('cruds.article.title_plural_obj')); ?> 
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Article">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.title')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.slug')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.short_text')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.categories')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.tags')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.article.fields.views_count')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($article->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($article->id ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($article->title ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($article->slug ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($article->short_text ?? ''); ?>

                            </td>
                            <td>
                                <?php $__currentLoopData = $article->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-info"><?php echo e($item->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge badge-info"><?php echo e($item->name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php echo e($article->views_count ?? ''); ?>

                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.articles.show', $article->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.articles.edit', $article->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_delete')): ?>
                                    <form action="<?php echo e(route('admin.articles.destroy', $article->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                    </form>
                                <?php endif; ?>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.articles.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
      }

      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
<?php endif; ?>

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Article:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/articles/index.blade.php ENDPATH**/ ?>