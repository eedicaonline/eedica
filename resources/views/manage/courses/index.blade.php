@extends('layouts.manage')

@section('content')
    <div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>ادارة الكورسات</h2>
		</div>
		<div class="uk-width-1-2">
			<a href="{{ route('courses.create') }}"
			class="uk-button uk-button-primary uk-button-small uk-float-left">
				<span class="uk-icon uk-margin-small-left" uk-icon="icon: plus-circle"></span>
				أضف كورس جديد
			</a>
		</div>
	</div>{{-- Title Page --}}
	<hr class="uk-divider-icon">{{-- Divider With Icon --}}

	<div class="uk-container uk-container-expand uk-padding
		uk-box-shadow-small uk-background-default ee-border">
		<div class="uk-overflow-auto">

			<table class="uk-table uk-table-striped uk-table-small uk-table-hover uk-table-divider">
			    <thead>
			        <tr>
			        	<th class="uk-table-shrink"><input class="uk-checkbox" type="checkbox"></th>
			        	<th class="uk-width-small">عنوان الكورس</th>
			        	<th class="uk-width-small">عدد الدروس</th>
			        	<th class="uk-width-small">سعر الكورس</th>
			        	<th class="uk-width-small">التعليقات</th>
			        	<th class="uk-width-small">تاريخ البدء</th>
			        	<th class="uk-width-small">المهام</th>
			        	<th class="uk-width-small"></th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($courses as $course)
			    		<tr>
				    		<td class=""><input class="uk-checkbox" type="checkbox"></td>
				        	<td>{{ $course->title }}</td>
				        	<td>{{ $course->lessons_count  }}</td>
				        	<td>{{ $course->price }}</td>
				        	<td>{{ $course->comments_count }}</td>
				        	<td class="uk-text-truncate">{{ $course->start_date }}</td>
				    		<td class="uk-table-small">
								<a href="{{ route('courses.show', $course->id) }}"
									class="uk-button uk-button-small uk-button-default uk-border-rounded">
									عرض
								</a>
							</td>
							<td class="uk-table-small">
								<a href="{{ route('courses.edit', $course->id) }}"
									class="uk-button uk-button-small uk-button-default uk-border-rounded">
									تعديل
								</a>
							</td>
				    	</tr>
			    	@endforeach
			    </tbody>
			</table>

		</div>{{-- Responsive Div Table --}}
	</div>{{-- Table Section --}}

@endsection