<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Employee\DashboardController as EmployeeDashboard;

Route::controller(EmployeeDashboard::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('employee.dashboard');
    Route::post('/users', 'store');
});