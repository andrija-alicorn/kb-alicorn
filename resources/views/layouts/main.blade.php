<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('panel.site_title') }}</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}?ver={{ filemtime(public_path('css/style.css')) }}" rel="stylesheet">
    </head>

    <body>

        @include('partials.nav')

        @if(!isset($exception))
            <div class="searchfield bg-hed-six">
                <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
                     <a class="logo" href="/">
                        <img src="{{ asset('images/alicorn-logo.png') }}" alt="logo">
                    </a>
                    <div class="row text-center margin-bottom-20">
                        <h1 class="white">{{ trans('panel.site_title') }}</h1>
                        <span class="nested">{{ trans('panel.site_tagline') }}</span>
                    </div>
                </div>
                @if (isset($categories) && isset($subcategories) && isset($tags))
                   @include('partials.search_form')
                @endif
            </div>
        @endif

        <div class="container featured-area-default padding-30">
            <div class="row">
                @yield('content')

                @if(!isset($exception))
                    @include('partials.sidebar')
                @endif
            </div>
        </div>

        @yield('about')

        @include('partials.footer')

        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}?ver={{ filemtime(public_path('js/app.js')) }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
    </body>
</html>