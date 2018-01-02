@extends('layouts.manage')

@section('content')

	<div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>
				{{ $user->name }}
			</h2>
		</div>
        <div class="uk-width-1-2">
            <a href="{{ route('users.edit', $user->id) }}"
            class="uk-button uk-button-primary uk-button-small uk-float-left">
                <span class="uk-icon uk-margin-small-left" uk-icon="icon: plus"></span>
                تعديل بيانات المستخدم
            </a>
        </div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}
	
    <div class="uk-container uk-container-expand uk-padding
        uk-box-shadow-small uk-background-default ee-border">
        <div class="uk-overflow-auto">

            <form class="uk-form-stacked" role="form">
                <div>
                    <label class="uk-form-label">اسم المستخدم</label>
                    <input id="name" type="text"
                    class="uk-input"
                    name="name" value="{{ $user->name }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">عنوان البريد الالكتروني</label>
                    <input id="email" type="email"
                    class="uk-input"
                    name="email" value="{{ $user->email }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">تاريخ انشاء المستخدم</label>
                    <input id="email" type="email"
                    class="uk-input"
                    name="email" value="{{ $user->created_at }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">اخر تحديث في :</label>
                    <input id="text" type="text"
                    class="uk-input"
                    name="email" value="{{ $user->updated_at }}" disabled>
                </div>

                <div class="uk-margin">
                    <div class="uk-navbar">
                        <p class="uk-text-primary">
                           {{ $user->roles->count() == 0 ? 'لم يتم تعيين اي وظيفة لهذا المستخدم' : '' }} 
                        </p>
                        @foreach ($user->roles as $role)
                            <li>{{ $role->name }} <em>{{ $role->display_name }}</em></li>
                        @endforeach
                    </div>
                </div>
                
            </form>

        </div>
    </div>

@endsection