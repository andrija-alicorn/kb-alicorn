<div class="container-fluid">
    <div class="navigation">
        <div class="row">
            <ul class="topnav">
                <li></li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i> {{ trans('global.home') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}">
                        <i class="fa fa-file-text-o"></i> {{ trans('cruds.article.title') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq.index') }}">
                        <i class="fa fa-lightbulb-o"></i> {{ trans('cruds.faqManagement.title') }}
                    </a>
                </li>
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
            </ul>
        </div>
    </div>
</div>