<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminPageController;
use Illuminate\Support\Facades\Route;


//Admin auth routes
Route::get( '/admin-login', [ AdminAuthController::class, 'showLoginPage' ] ) -> name( 'admin.login.page' );
Route::post( '/admin-login', [ AdminAuthController::class, 'login' ] ) -> name( 'admin.login' );

//Admin page routes
Route::get( '/dashboard', [ AdminPageController::class, 'showDashboard' ] ) -> name( 'admin.dashboard' );