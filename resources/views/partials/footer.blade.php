
<div class="container-fluid footer marg30">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">{{ trans('copy.how_it_works') }}</div>
                <div class="footer-body">
                    <p>{{ trans('copy.footer_explaination1') }} </p>
                    <p>{{ trans('copy.footer_explaination2') }} </p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading">{{ trans('cruds.category.title') }}</div>
                <div class="footer-body">
                    <ul>
                        @foreach($footerCategories as $category)
                            <li>
                                <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 margin-top-20">
            <div class="panel-transparent">
                <div class="footer-heading"><p>{{ trans('copy.popular_articles') }} </p></div>
                <div class="footer-body">
                    <ul>
                        @foreach($popularArticles as $article)
                            <li>
                                <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">{{ $article->title }}</a>
                            </li>
                        @endforeach
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
<!-- END COPYRIGHT INFO -->