<?php

use App\Http\Controllers\college\GeneralinfoformCollegeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\College\CollegeDashboardController;
use App\Http\Controllers\College\CollegeLoginController;
use App\Http\Controllers\Admin\GeneralinfoController;

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
    return view('welcome');
});

Auth::routes();

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//college_Users
    Route::prefix('college')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
});
    Route::group(['middleware'=>'auth'], function(){
    Route::get('college/general_info_form',[App\Http\Controllers\College\GeneralinfoformCollegeController::class,'Index']);
    Route::get('college/physical_facilities_form',[App\Http\Controllers\College\PhysicalFacilitiesformCollegeController::class,'Index']);
    Route::get('college/form_list',[App\Http\Controllers\College\CollegeFormController::class,'Index']);
    Route::post('/submit-form', [App\Http\Controllers\College\GeneralinfoformCollegeController::class,'create'])->name('store_abc');
//        Route::post('/submit-form', [GeneralinfoformCollegeController::class, 'store'])->name('store');

    });

//college
    Route::get('admin/login', [App\Http\Controllers\Admin\adminLoginController::class, 'index']);
    Route::post('admin/admin-login', [App\Http\Controllers\Admin\adminLoginController::class, 'colLogin']);
    Route::group(['middleware'=>'adminUser'], function(){
    Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('admin/general_info_form',[App\Http\Controllers\Admin\GeneralinfoController::class,'Index']);
    Route::get('admin/form_list',[App\Http\Controllers\Admin\FormFillupListController::class,'Index']);
    Route::get('admin/report',[App\Http\Controllers\Admin\ReportController::class,'Index']);
    Route::get('admin/register',[AdminRegisterController::class,'Index']);
    Route::post('admin/createAdmin',[AdminRegisterController::class,'createAdmin']);
    Route::get('admin/404',[App\Http\Controllers\NotFoundController::class,'Index']);
    Route::get('admin/logout', [App\Http\Controllers\Admin\DashboardController::class, 'colLogout']);
    });
