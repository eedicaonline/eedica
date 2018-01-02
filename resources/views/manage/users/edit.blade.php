@extends('layouts.manage')

@section('content')

	<div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>
				تعديل بيانات المستخدم
			</h2>
		</div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}
	
	<div class="uk-width-1-1@s uk-align-center ee-border">
		<div class="uk-padding uk-box-shadow-small  uk-background-default">
			<form class="uk-form-stacked" role="form" method="POST"
				action="{{ route('users.update', $user->id) }}">

        {{method_field('PUT')}}
				{{ csrf_field() }}
                        
        <div>
          <label class="uk-form-label">اسم المستخدم</label>
          <input id="name" type="text"
          class="uk-input{{ $errors->has('name') ? ' uk-form-danger' : '' }}"
          name="name" value="{{ $user->name }}" required autofocus>

          @if ($errors->has('name'))
            <div class="uk-alert-danger" uk-alert>
              {{ $errors->first('name') }}
            </div>
          @endif
        </div>

        <div class="uk-margin">
          <label class="uk-form-label">عنوان البريد الالكتروني</label>
          <input id="email" type="email"
          class="uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}"
          name="email" value="{{ $user->email }}" required autofocus>

          @if ($errors->has('email'))
            <div class="uk-alert-danger" uk-alert>
              {{ $errors->first('email') }}
            </div>
          @endif
        </div>

        <div class="uk-margin">
          <label class="uk-form-label">كلمة المرور</label>
          <input id="password" type="password"
          class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}"
          name="password" value="{{ $user->password }}" required autofocus>

          @if ($errors->has('password'))
            <div class="uk-alert-danger" uk-alert>
              {{ $errors->first('password') }}
            </div>
          @endif
        </div>

        <div class="uk-margin">
          <div class="uk-navbar">
            <p class="uk-text-primary">
              {{ $user->roles->count() == 0 ? 'لم يتم تعيين اي وظيفة لهذا المستخدم' : '' }} 
            </p>
            @foreach ($user->roles as $role)
              <li><em>{{ $role->display_name }}</em></li>
            @endforeach
          </div>
        </div>

        <div class="uk-margin">
					<button class="uk-button uk-button-primary uk-width-1-1" type="submit" name="button">
						اضافة و حفظ
					</button>
				</div>

			</form>
		</div>
	</div>

@endsection