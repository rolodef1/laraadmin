<?php

/*
|--------------------------------------------------------------------------
| Api Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.apiRoute').'.';
}

Route::group(['as' => $as], function () {
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.apiRoute') . '/users', 'apiLA\UsersController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.apiRoute') . '/roles', 'apiLA\RolesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.apiRoute') . '/permissions', 'apiLA\PermissionsController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.apiRoute') . '/departments', 'apiLA\DepartmentsController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.apiRoute') . '/employees', 'apiLA\EmployeesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.apiRoute') . '/organizations', 'apiLA\OrganizationsController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.apiRoute') . '/backups', 'apiLA\BackupsController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
});
