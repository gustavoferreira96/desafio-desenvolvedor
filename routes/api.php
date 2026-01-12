<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::post('/uploads', [UploadController::class, 'store']);
Route::get('/uploads', [UploadController::class, 'index']);
