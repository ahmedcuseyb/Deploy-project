<?php
use App\Http\Controllers\Api\BookApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('books',BookApiController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


