<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('front');
});

Auth::routes();

Route::prefix('manage')
	->middleware('role:superadministrator|administrator|author|teacher')
	->group( function () {
		// DASHBOARD
		Route::get('/', 'Manage\ManageConroller@index');
		Route::get('/dashborad', 'Manage\ManageConroller@dashborad')->name('manage.dashboard');
		// USERS
		Route::resource('/users', 'Manage\UsersController');
		// PERMISSIONS
		Route::resource('/permissions', 'Manage\PermissionsController');
		// ROLES
		Route::resource('/roles', 'Manage\RolesController');
		// Courses
		Route::resource('/courses', 'Manage\CoursesController');
		

	});

Route::get('/home', 'HomeController@index')->name('home');
