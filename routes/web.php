<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;

use App\Http\Controllers\Frontend\DashoardController;
use App\Http\Controllers\Frontend\EditdashController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\BlogControllerController;
use App\Http\Controllers\Frontend\BlogdetailsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\AdminController\RegisterController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\medicinecontroller\MedHomeController;


Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/roles',[RegisterController::class,'registered']);
Route::get('/login', [LoginController::class,'login']);
Route::get('/signup', [SignupController::class,'signup']);
Route::get('/role-edit/{id}',[RegisterController::class,'Edited_Roles']);
Route::get('/admin',[AdminController::class,'admin_page']);
Route::get('/user', [UserController::class,'user']);
Route::get('/services', [ServicesController::class,'services']);
Route::get('/medicinehome', [MedHomeController::class,'medicine_page']);

Route::post('SignUpFunc',[SignupController::class,'SignUpFunc']);
Route::post('LogInFunc',[LoginController::class,'LogInFunc']);
Route::put('/role-update/{id}',[RegisterController::class,'update_user']);
Route::delete('/user-delete/{id}',[RegisterController::class,'delete_user']);


