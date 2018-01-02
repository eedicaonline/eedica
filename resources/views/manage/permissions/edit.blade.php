@extends('layouts.manage')

@section('content')

	<div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>
				تعديل بيانات التصريح
			</h2>
		</div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}
	
	<div class="uk-width-1-1@s uk-align-center">
		<div class="uk-padding uk-box-shadow-small  uk-background-default">
			<form class="uk-form-stacked" role="form" method="POST"
				action="{{ route('permissions.update', $permission->id) }}">

				{{ csrf_field() }}
                {{method_field('PUT')}}

				<div>
                    <label class="uk-form-label">اسم الاذن</label>
                    <input id="name" type="text"
                    class="uk-input{{ $errors->has('name') ? ' uk-form-danger' : '' }}"
                    name="name" value="{{ $permission->name }}" required autofocus>

                    @if ($errors->has('name'))
                        <div class="uk-alert-danger" uk-alert>
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">الاسم المعروض</label>
                    <input id="display_name" type="text"
                    class="uk-input{{ $errors->has('display_name') ? ' uk-form-danger' : '' }}"
                    name="display_name" value="{{ $permission->display_name }}" required autofocus>

                    @if ($errors->has('display_name'))
                        <div class="uk-alert-danger" uk-alert>
                            {{ $errors->first('display_name') }}
                        </div>
                    @endif
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">الوصف</label>
                    <input id="description" type="text"
                    class="uk-input{{ $errors->has('description') ? ' uk-form-danger' : '' }}"
                    name="description" value="{{ $permission->description }}" required autofocus>

                    @if ($errors->has('description'))
	                    <div class="uk-alert-danger" uk-alert>
	                        {{ $errors->first('description') }}
	                    </div>
	                @endif
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