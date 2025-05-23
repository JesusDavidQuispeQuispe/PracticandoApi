<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/posts', [PostController::class, 'index']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{post}', [PostController::class, 'show']);
// Route::put('/posts/{post}', [PostController::class, 'update']);
// Route::delete('/posts/{post}', [PostController::class, 'destroy']);

//Route V1
Route::apiResource('v1/posts', PostV1::class)->only('index','show', 'destroy')
    ->middleware('auth:sanctum');


//Route V2 
Route::apiResource('v2/posts', PostV2::class)->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class,

'login']);
    



