<ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>

	<li class="uk-nav-header uk-text-center">العامة</li>
  <li>
    <a href="#">
      <span class="uk-icon uk-margin-left uk-margin-small-right" uk-icon="icon: cog"></span>
      لوحة التحكم
    </a>
  </li>
  <li>
    <a href="#">
      <span class="uk-icon uk-margin-left uk-margin-small-right" uk-icon="icon: grid"></span>
      المشرف
    </a>
  </li>
  @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
    <li>
      <a href="{{ route('users.index') }}">
        <span class="uk-icon uk-margin-left uk-margin-small-right" uk-icon="icon: users"></span>
        ادارة المستخدمين
      </a>
    </li>
    <li class="uk-parent">
      <a href="#">التصاريح <em>&amp;</em> الاذونات</a>
      <ul class="uk-nav-sub uk-text-center">
        <li><a href="{{ route('roles.index') }}">التصاريح</a></li>
        <li><a href="{{ route('permissions.index') }}">الاذونات</a></li>
      </ul>
    </li>
  @endif
  <li>
    <a href="{{ route('courses.index') }}">
      <span class="uk-icon uk-margin-left uk-margin-small-right" uk-icon="icon: server"></span>
      الكورسات
    </a>
  </li>
</ul>