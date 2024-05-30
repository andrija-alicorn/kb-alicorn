<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    <?php echo e(trans('global.dashboard')); ?>

                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        <?php echo e(trans('cruds.userManagement.title')); ?>

                    </a>
                    <ul class="nav-dropdown-items">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.permission.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.role.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.user.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.categories.index")); ?>" class="nav-link <?php echo e(request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : ''); ?>">
                        <i class="fa-fw fas fa-tags nav-icon">

                        </i>
                        <?php echo e(trans('cruds.category.title')); ?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.tags.index")); ?>" class="nav-link <?php echo e(request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : ''); ?>">
                        <i class="fa-fw fas fa-tags nav-icon">

                        </i>
                        <?php echo e(trans('cruds.tag.title')); ?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_access')): ?>
                <li class="nav-item">
                    <a href="<?php echo e(route("admin.articles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/articles') || request()->is('admin/articles/*') ? 'active' : ''); ?>">
                        <i class="fa-fw far fa-newspaper nav-icon">

                        </i>
                        <?php echo e(trans('cruds.article.title')); ?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_management_access')): ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-question nav-icon">

                        </i>
                        <?php echo e(trans('cruds.faqManagement.title')); ?>

                    </a>
                    <ul class="nav-dropdown-items">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.faq-categories.index")); ?>" class="nav-link <?php echo e(request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.faqCategory.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_question_access')): ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route("admin.faq-questions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'active' : ''); ?>">
                                    <i class="fa-fw fas fa-question nav-icon">

                                    </i>
                                    <?php echo e(trans('cruds.faqQuestion.title')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><?php /**PATH /var/www/kb.alicorn.org/htdocs/LaravelKnowledgeBaseFAQ/resources/views/admin/partials/menu.blade.php ENDPATH**/ ?>