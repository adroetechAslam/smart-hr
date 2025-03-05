<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
	if (Auth::check()) {
		return redirect()->route(Auth::user()->role . '.dashboard');
	}
	return view('welcome'); 
	// redirect()->route('login');
});

Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function() {
    require __DIR__ . '/web/admin/dashboard.php';
});

Route::prefix('employee')->middleware(['auth', 'user-access:employee'])->group(function() {
    require __DIR__ . '/web/employee/dashboard.php';
});

Route::fallback(function () {
	return view(404);
});