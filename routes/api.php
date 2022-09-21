<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('article', [ArticleController::class, 'index']);
Route::post('article/tambah_data', [ArticleController::class, 'create']);
Route::put('article/tambah_data/update/{id}', [ArticleController::class, 'update']);
Route::delete('article/tambah_data/update/delete/{id}', [ArticleController::class, 'delete_data']);
