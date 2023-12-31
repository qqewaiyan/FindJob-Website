<?php

use App\Http\Controllers\UserController;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Actions\Fortify\UpdateUserPassword;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('start.home');
    });
    Route::get("register/user",[AuthController::class,"registerUser"])->name("auth#registerUser");
Route::get("register/company",[AuthController::class,"registerCompany"])->name("auth#registerCompany");
});

Route::get('/dashboard',[AuthController::class,"dashboard"])->name('auth#dashboard');

//admin routes

Route::middleware(["admin_auth"])->group(function(){
        Route::prefix("admin")->group(function(){
        Route::resource("admins",AdminController::class);

        Route::get("admin/list",[AdminController::class,"adminList"])->name("admin#adminList");
        Route::get("changePasswordPage",[AdminController::class,"changePasswordPage"])->name("admin#changePasswordPage");
        Route::post("update/password,{id}",[AdminController::class,"updatePassword"])->name("admin#updatePassword");
        //user

        Route::get("user/page",[AdminController::class,"userPage"])->name("admin#userPage");
        Route::get("user/edit,{id}",[AdminController::class,"userEdit"])->name("admin#userEdit");
        Route::get("user/delete,{id}",[AdminController::class,"userDelete"])->name("admin#userDelete");
        Route::get("user/roleChange",[AdminController::class,"userRoleChange"])->name("admin#userRoleChange");

        //company

        Route::get("company/page",[AdminController::class,"companyPage"])->name("admin#companyPage");
        Route::get("company/edit,{id}",[AdminController::class,"companyEdit"])->name("admin#companyEdit");
        Route::get("company/delete,{id}",[AdminController::class,"companyDelete"])->name("admin#companyDelete");
        Route::get("company/status/search",[AdminController::class,"companyStatusSearch"])->name("admin#companyStatusSearch");
        Route::get("company/statusChange",[AdminController::class,"companyStatusChange"])->name("admin#companyStatusChange");

    });

});

//user routes

Route::middleware(["user_auth"])->group(function(){
    Route::prefix("user")->group(function(){
        Route::resource("users",UserController::class);

    

    });
});
