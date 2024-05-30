@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20 kb-homepage">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fb-heading">
                {{ trans('copy.top_level_categories') }}
            </h2>
            <hr class="style-three">
            <div class="row">
                @foreach($categories as $category)
                     @if($category->articles_count > 0)
                        <div class="col-md-6 margin-bottom-20">
                            <div class="fat-heading-abb">
                                <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">
                                    <i class="fa fa-folder"></i> {{ $category->name }}
                                    <span class="cat-count">({{ $category->articles_count }})</span>
                                </a>
                            </div>
                            <div class="fat-content-small padding-left-30">
                                <ul>
                                    @foreach($category->articles as $article)
                                        @if($loop->index >= 5)
                                            @break
                                        @endif
                                        <li>
                                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        
        {{ $categories->links('partials.pagination') }}
    </div>
</div>
@endsection

@section('about')
<div class="container-fluid featured-area-grey padding-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-us">
                <h2 class="fb-heading">
                    {{ trans('copy.about_us') }}
                </h2>
                <div class="fb-content">
                    <p>
                        {{ trans('copy.about_us1') }}
                    </p>
                    <p>
                       {{ trans('copy.about_us2') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection