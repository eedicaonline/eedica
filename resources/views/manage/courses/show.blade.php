@extends('layouts.manage')

@section('content')

	<div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>
				{{ $course->title }}
			</h2>
		</div>
        <div class="uk-width-1-2">
            <a href="{{ route('courses.edit', $course->id) }}"
            class="uk-button uk-button-primary uk-button-small uk-float-left">
                <span class="uk-icon uk-margin-small-left" uk-icon="icon: pencil"></span>
                تعديل بيانات الكورس
            </a>
        </div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}
	
    <div class="uk-container uk-container-expand uk-padding
        uk-box-shadow-small uk-background-default ee-border">
        <div class="uk-overflow-auto">

            <form class="uk-form-stacked uk-grid-small" role="form" uk-grid>
                <div class="uk-width-1-1 uk-margin">
                    <label class="uk-form-label">عنوان الكورس</label>
                    <input id="title" type="text"
                    class="uk-input"
                    name="name" value="{{ $course->title }}" disabled>
                </div>

				<div class="uk-width-1-1 uk-margin">
                	<label class="uk-form-label">عنوان url </label>
                    <input id="title" type="text"
                    class="uk-input"
                    name="name" value="{{ $course->slug }}" disabled>
		        </div>

                <div class="uk-width-1-1 uk-margin">
                	<label class="uk-form-label">الوصف</label>
		            <textarea class="uk-textarea" rows="5" placeholder="Textarea" disabled>
		            	{{ $course->description }}
		            </textarea>
		        </div>

		        <div class="uk-width-1-4@s uk-margin">
		        	<label class="uk-form-label">عدد الدروس</label>
			        <input class="uk-input" type="text"
			        placeholder="{{ $course->lessons_count }} درس" disabled>
			    </div>

			    <div class="uk-width-1-4@s uk-margin">
		        	<label class="uk-form-label">عدد المرئيات</label>
			        <input class="uk-input" type="text"
			        placeholder="{{ $course->videos_count }} تسجيل" disabled>
			    </div>

			    <div class="uk-width-1-4@s uk-margin">
		        	<label class="uk-form-label">عدد الدروس النصية</label>
			        <input class="uk-input" type="text"
			        placeholder="{{ $course->documents_count }}" disabled>
			    </div>

			    <div class="uk-width-1-4@s uk-margin">
		        	<label class="uk-form-label">عدد التعليقات</label>
			        <input class="uk-input" type="text"
			        placeholder="{{ $course->comments_count }} تعليق" disabled>
			    </div>

			     <div class="uk-width-1-4@s uk-margin">
		        	<label class="uk-form-label">سعر الكورس</label>
			        <input class="uk-input" type="text"
			        placeholder="$ {{ $course->price }}" disabled>
			    </div>
				
				 <div class="uk-width-1-4@s uk-margin">
		        	<label class="uk-form-label">صورة الكورس</label>
			        <input class="uk-input" type="text"
			        placeholder="{{ $course->course_image }} تعليق" disabled>
			    </div>


            </form>

        </div>
    </div>

@endsection