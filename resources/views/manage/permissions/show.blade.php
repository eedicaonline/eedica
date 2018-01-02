@extends('layouts.manage')

@section('content')

	<div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>
				{{ $permission->name }}
			</h2>
		</div>
        <div class="uk-width-1-2">
            <a href="{{ route('permissions.edit', $permission->id) }}"
            class="uk-button uk-button-primary uk-button-small uk-float-left">
                <span class="uk-icon uk-margin-small-left" uk-icon="icon: pencil"></span>
                تعديل التصاريح
            </a>
        </div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}
	
    <div class="uk-container uk-container-expand uk-padding
        uk-box-shadow-small uk-background-default ee-border">
        <div class="uk-overflow-auto">

            <form class="uk-form-stacked" role="form">
                <div>
                    <label class="uk-form-label">اسم الاذن</label>
                    <input id="name" type="name"
                    class="uk-input"
                    name="name" value="{{ $permission->name }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">الاسم المعروض</label>
                    <input id="display_name" type="text"
                    class="uk-input"
                    name="display_name" value="{{ $permission->display_name }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">الوصف</label>
                    <input id="description" type="text"
                    class="uk-input"
                    name="description" value="{{ $permission->description }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">تاريخ انشاء الاذن</label>
                    <input id="created_at" type="text"
                    class="uk-input"
                    name="created_at" value="{{ $permission->created_at }}" disabled>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">اخر تحديث في :</label>
                    <input id="update_at" type="text"
                    class="uk-input"
                    name="update_at" value="{{ $permission->updated_at }}" disabled>
                </div>
            </form>

        </div>
    </div>

@endsection