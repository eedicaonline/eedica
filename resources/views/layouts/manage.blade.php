<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">

        <div class="uk-navbar-container" uk-navbar="mode: hover">
            <div class="uk-container uk-container-expand uk-width-1-1 uk-background-default">
                @include('layouts.partials.manage.nav')
            </div>
        </div>{{-- Header Navbar --}}
        <hr class="uk-margin-remove">
        
        <div class="uk-contianer-expand">
            <div class="uk-grid uk-grid-small" uk-height-viewport="expand: true">

                <div class="uk-width-1-5 uk-background-default uk-box-shadow-small">
                    <div class="uk-margin-top uk-margin-bottom">
                        @include('layouts.partials.manage.sideManage')
                    </div>
                </div>{{-- /.Sidenav --}}

                <div class="uk-width-4-5">
                    <div class="uk-margin-top uk-margin-bottom">
                         @yield('content')
                     </div>
                </div>{{-- ./Content --}}

            </div>{{-- /.Grid --}}
        </div>{{-- ./Page --}}

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
