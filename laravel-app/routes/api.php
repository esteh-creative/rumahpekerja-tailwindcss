<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/test',function(){
//     return response()->json([
//         'success'=>true,
//         'message'=>'ok'
//     ]);
// });
// Route::get('get-company',[CompanyController::class,'index']);
Route::get('get-company', [CompanyController::class, 'index']);
Route::post('get-company', [CompanyController::class, 'store']);
Route::post('get-company/{id}', [CompanyController::class, 'update']);
Route::delete('get-company/{id}', [CompanyController::class, 'destroy']);
