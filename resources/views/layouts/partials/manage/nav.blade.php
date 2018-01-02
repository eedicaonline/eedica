<nav class="uk-navbar uk-navbar-transparent">

    <div class="uk-navbar-right">
        <!-- Branding Image -->
        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
            اي ايدكا
        </a>
        <ul class="uk-navbar-nav">
            <li><a href="#" class="uk-button-text">موجه ملاحي</a></li>
            <li><a href="#" class="uk-button-text">موجه ملاحي</a></li>
            <li><a href="#" class="uk-button-text">موجه ملاحي</a></li>
            <li><a href="#" class="uk-button-text">موجه ملاحي</a></li>
        </ul>
    </div>

    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}" class="uk-button-text">تسجيل دخول</a></li>
                <li><a href="{{ route('register') }}" class="uk-button-text">حساب جديد</a></li>
            @else
                <li><a href="" uk-icon="icon: bell" class="uk-button-text"></a></li>
                <li><a href="" uk-icon="icon: mail" class="uk-button-text"></a></li>
                <li><a href="" uk-icon="icon: commenting" class="uk-button-text"></a></li>
                <li>
                    <a href="#" class="uk-text-danger uk-button-text">
                        <span class="uk-icon" uk-icon="icon: chevron-down"></span>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="uk-navbar-dropdown uk-box-shadow-small uk-background-default" uk-dropdown>
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li>
                                <a href="#">
                                    <span class="uk-icon uk-margin-left" uk-icon="icon: user"></span>
                                    الملف الشخصي
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('manage.dashboard') }}">
                                    <span class="uk-icon uk-margin-left" uk-icon="icon: cog"></span>
                                    الادارة
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                     <span class="uk-icon uk-margin-left" uk-icon="icon: bell"></span>
                                    الاشعارات
                                </a>
                            </li>
                            <li class="uk-nav-divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <span class="uk-icon uk-margin-left" uk-icon="icon: sign-out"></span>
                                    تسجيل خروج
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                    {{ csrf_field() }}
                                </form>
                            </li>{{-- logout --}}
                        </ul>
                    </div>{{-- Dropdown --}}
                </li>
            @endif
        </ul>
    </div>

</nav>
