@extends('layouts.manage')

@section('content')
    <div class="uk-grid-small" uk-grid>
		<div class="uk-width-1-2">
			<h2>ادارة المستخدمين</h2>
		</div>
		<div class="uk-width-1-2">
			<a href="{{ route('users.create') }}"
			class="uk-button uk-button-primary uk-button-small uk-float-left">
				<span class="uk-icon uk-margin-small-left" uk-icon="icon: plus-circle"></span>
				أضف مستخدم جديد
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
			        	<th class="uk-width-small">الايميل</th>
			        	<th class="uk-table">تاريخ التسجيل</th>
			        	<th class="uk-width-small">المهام</th>
			        	<th class="uk-width-small"></th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($users as $user)
				        <tr>
				        	<td class=""><input class="uk-checkbox" type="checkbox"></td>
				        	<td>{{ $user->id }}</td>
				        	<td>{{ $user->name }}</td>
				        	<td>{{ $user->email }}</td>
				        	<td class="uk-text-truncate">{{ $user->created_at }}</td>
				        	<td class="uk-table-small">
								<a href="{{ route('users.show', $user->id) }}"
									class="uk-button uk-button-small uk-button-default uk-border-rounded">
									عرض
								</a>
							</td>
							<td class="uk-table-small">
								<a href="{{ route('users.edit', $user->id) }}"
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