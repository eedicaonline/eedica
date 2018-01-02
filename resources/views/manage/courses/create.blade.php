@extends('layouts.manage')

@section('content')

	<div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>
				اضافة كورس جديد
			</h2>
		</div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}
	
	<div class="uk-width-1-1@s uk-align-center">
		<div class="uk-padding uk-box-shadow-small  uk-background-default">
			<form class="uk-form-stacked" role="form" method="POST"
				action="{{ route('courses.store') }}">

				{{ csrf_field() }}

				<div>
          <label class="uk-form-label">عنوان الكورس</label>
          <input id="title" type="text"
          class="uk-input{{ $errors->has('title') ? ' uk-form-danger' : '' }}"
          name="title" value="{{ old('title') }}" required autofocus>

          @if ($errors->has('title'))
              <div class="uk-alert-danger" uk-alert>
                  {{ $errors->first('title') }}
              </div>
          @endif
        </div>

        <div class="uk-margin">
          <select class="uk-select">
            @foreach ($teachers as $teacher)
              <option>{{ $teacher->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label">عنوان الرابط</label>
            <input id="slug" type="text"
            class="uk-input{{ $errors->has('slug') ? ' uk-form-danger' : '' }}"
            name="slug" value="{{ old('slug') }}" required autofocus>

            @if ($errors->has('slug'))
                <div class="uk-alert-danger" uk-alert>
                    {{ $errors->first('slug') }}
                </div>
            @endif
        </div><!-- Slug -->

        <div class="uk-margin">
            <label class="uk-form-label">عنوان الرابط</label>
            <textarea class="uk-textarea" rows="5" placeholder="اكتب وصف للكورس"></textarea>
        </div><!-- Description -->

        <div class="uk-margin uk-grid uk-child-width-1-2@m" uk-grid>
        	<div>
        		<label class="uk-form-label">صورة للكورس</label>
              <button class="uk-button uk-button-default">ارفع الملف</button>
              <div uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-form-width-medium" type="text" placeholder="اختر ملف الصورة" disabled>
            </div>
          </div><!-- course image -->
                    
          <div>
        		<label class="uk-form-label">تاريخ البدء</label>
            <input class="uk-input uk-form-width-large" type="text" placeholder="تاريخ البدء">
        	</div><!-- start dtae -->
        </div><!-- grid image course AND start dtae -->

				<div class="uk-margin-medium uk-grid uk-child-width-1-3@m" uk-grid>
        	<div class="uk-margin-medium-top">
        		<label><input class="uk-checkbox" type="checkbox"> كورس مجاني ؟</label>
        	</div><!-- free cousre ?? -->
                    
	        <div>
        		<label class="uk-form-label">ثمن الكورس</label>
            <input class="uk-input uk-form-width-large" type="text" placeholder="ثمن الكورس">
          </div><!-- price -->

        	<div class="uk-margin-medium-top uk-text-left">
        		<label><input class="uk-checkbox" type="checkbox"> نشر وتعميم الكورس ؟</label>
        	</div><!-- free cousre ?? -->
        </div><!-- free course and price and punlished  -->

        <div class="uk-margin">
					<button class="uk-button uk-button-primary uk-width-1-1" type="submit" name="button">
						اضافة و حفظ
					</button>
				</div>

			</form>
		</div>
	</div>

@endsection