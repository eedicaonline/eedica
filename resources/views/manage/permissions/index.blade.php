@extends('layouts.manage')

@section('content')
    <div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>ادارة الاذونات</h2>
		</div>
		<div class="uk-width-1-2">
			<a href="{{ route('permissions.create') }}"
			class="uk-button uk-button-primary uk-button-small uk-float-left">
				<span class="uk-icon uk-margin-small-left" uk-icon="icon: plus"></span>
				أضف بندا جديدا
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
			        	<th class="uk-table-shrink">ID</th>
			        	<th class="uk-width-small">الاسم</th>
			        	<th>الاسم المعروض</th>
			        	<td>الوصف</td>
			        	<th class="uk-">تاريخ التسجيل</th>
			        	<th class="uk-width-expand">المهام</th>
			        	<th class="uk-table-shrink"></th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($permissions as $permission)
				        <tr>
				        	<td class=""><input class="uk-checkbox" type="checkbox"></td>
				        	<td>{{ $permission->id }}</td>
				        	<td>{{ $permission->name }}</td>
				        	<td>{{ $permission->display_name }}</td>
				        	<td>{{ $permission->description }}</td>
				        	<td class="uk-text-truncate">{{ $permission->created_at }}</td>
				        	<td>
								<a href="{{ route('permissions.show', $permission->id) }}"
									class="uk-button uk-button-small uk-button-default uk-border-rounded">
									عرض
								</a>
							</td>
							<td>
								<a href="{{ route('permissions.edit', $permission->id) }}"
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