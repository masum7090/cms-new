<?php

use App\Http\Controllers\Admin\GeneralinfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('college/general_info_form', GeneralinfoController::class);
//Route::post('college/general_info_form', [App\Http\Controllers\Admin\GeneralinfoController::class, 'store']);

