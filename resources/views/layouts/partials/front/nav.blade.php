<nav class="uk-navbar uk-navbar-transparent uk-visible@m">

  <div class="uk-navbar-right">
    <!-- Branding Image -->
    <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
      <span class="uk-text-danger uk-text-bold">اي-</span>
      ايدكا
    </a>
    <div class="uk-navbar-item">
      <form class="uk-search uk-search-default">
      <div class="uk-inline">
        <span uk-search-icon class="uk-text-danger"></span>
        <a href="#" class="uk-form-icon uk-text-danger uk-margin-left uk-text-bold" uk-icon="icon: chevron-down">
        </a>
        <input class="uk-search-input" type="search"
        placeholder="تعاقد مع مدرسك المفضل...">
      </div>
      </form>
    </div><!-- Search With Dropdown Icon -->
    <ul class="uk-navbar-nav">
      <li><a href="#" class="uk-button-text">من نحن</a></li>
      <li><a href="#" class="uk-button-text">تواصل معنا</a></li>
    </ul>
  </div>

  <div class="uk-navbar-left">
    <ul class="uk-navbar-nav">
      @if (Auth::guest())
        <li>
          <a href="{{ route('login') }}" class="uk-button-text">
            تسجيل دخول
            <span class="uk-margin-small-right" uk-icon="icon: sign-in"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('register') }}" class="uk-button-text">
            حساب جديد
            <span class="uk-margin-small-right" uk-icon="icon: pencil"></span>
          </a>
        </li>
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
<!-- END NAVBAR DESKTOP VERSION -->

<div class="uk-hidden@m">
    <div class="uk-offcanvas-content">
        <nav class="uk-navbar uk-navbar-transparent">
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a class="uk-navbar-toggle"
                        uk-navbar-toggle-icon
                        href="#"
                        uk-toggle="target: #mobile-version">
                        </a>
                    </li>
                </ul>
            </div>
        
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    @if (Auth::guest())
                        <li>
                            <a href="{{ route('login') }}" class="uk-button-text">
                                تسجيل دخول
                                <span class="uk-margin-small-right" uk-icon="icon: sign-in"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="uk-button-text">
                                حساب جديد
                                <span class="uk-margin-small-right" uk-icon="icon: pencil"></span>
                            </a>
                        </li>
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

        <div id="mobile-version" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar uk-background-default uk-flex uk-flex-column">
                <button class="uk-offcanvas-close" style="color: #808080" type="button" uk-close></button>
                        
                <ul class="uk-nav-primary uk-nav-center uk-margin-auto-vertical" uk-nav>
                    <li>
                        <a class="uk-navbar-item" href="{{ url('/') }}">
                            <h1 class="uk-heading-primary" style="color: #434343">
                                <span class="uk-text-danger uk-text-bold">اي-</span>
                                ايدكا
                            </h1>
                        </a>
                    </li>
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#">تواصل معنا</a></li>
                </ul>

            </div>
        </div>

    </div>
</div>
<!-- END NAVBAR MOBLIE VERSION -->