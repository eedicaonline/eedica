<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
<head>
    @include('layouts.partials.head')
</head>
<body>

    <div class="uk-navbar-container uk-box-shadow-small ee-header" uk-navbar="mode: hover"
    style="z-index: 980;"
    uk-sticky="top: #ee-banner; animation: uk-animation-slide-top;">
        <div class="uk-container uk-container-expand uk-width-1-1 uk-background-default">
            @include('layouts.partials.front.nav') 
        </div>
    </div>{{-- /.navbar --}}

    <div id="app" class="ee-wrapper">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
