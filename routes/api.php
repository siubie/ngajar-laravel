<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('kategori', KategoriController::class, ['as' => 'api']);
// Route::apiResource('kategori', KategoriController::class);

/**
* You can also do this if you've many API Routes.
* This will wrap your entire API Resource and put the prefix as 'api.'
*/
Route::name('api.')->group(function(){

    Route::apiResource('post', PostController::class);
    Route::apiResource('comment', CommentController::class);

    Route::apiResource('users', UserController::class);

    Route::apiResource('lesson', LessonController::class);
    
});
