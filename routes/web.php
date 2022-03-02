<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
 
Route::get('/',[HomeController::class, 'landingpage']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::POST('/create', [RegistrationController::class, 'create']);
Route::get('crudpage', [RegistrationController::class, 'index'])->name('crudpage');
Route::get('dashboard', [AdminAuthController::class, 'dashboard']); 
Route::get('login', [AdminAuthController::class, 'index'])->name('login');
Route::post('custom-login', [AdminAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AdminAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AdminAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AdminAuthController::class, 'signOut'])->name('signout');
Route::delete('{id}/destroy', [RegistrationController::class, 'destroy'])->name('destroy');
Route::put('{id}/update', [RegistrationController::class, 'update'])->name('update');
Route::get('{id}/update_form',[RegistrationController::class, 'update_form'])->name('update_form');