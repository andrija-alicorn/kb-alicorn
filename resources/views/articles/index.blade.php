@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <!-- BREADCRUMBS -->
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="active">{{ trans('cruds.article.title') }}</li>
            </ol>
        </div>
        <!-- END BREADCRUMBS -->
        <!-- ARTICLES -->
        <div class="fb-heading">
            {{ trans('cruds.article.all') }}
        </div>
        <hr class="style-three">

        @foreach($articles as $article)
            <div class="panel panel-default">
                <div class="article-heading-abb">
                    <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                        <i class="fa fa-pencil-square-o"></i> {{ $article->title }}</a>
                </div>
                <div class="article-info">
                    <div class="art-date">
                        <i class="fa fa-calendar-o"></i> {{ $article->created_at }}
                    </div>
                    @if($article->categories)
                        <div class="art-category">
                            @foreach($article->categories as $key => $item)
                                 <a href="{{ route('categories.show', [$item->slug, $item->id]) }}">
                                    <i class="fa fa-folder"></i> {{ $item->name }}
                                </a>
                            @endforeach
                        </div>
                    @endif 
                </div>
                <div class="article-content">
                    <p class="block-with-text">
                        {{ $article->short_text }}
                    </p>
                </div>
                <div class="article-read-more">
                    <a href="{{ route('articles.show', [$article->slug, $article->id]) }}" class="btn btn-default btn-wide">{{ trans('copy.read_more') }}</a>
                </div>
            </div>
        @endforeach

        {{ $articles->links('partials.pagination') }}
    </div>
</div>
@endsection