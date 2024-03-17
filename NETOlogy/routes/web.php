<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [\App\Http\Controllers\GroupController::class, 'index']);
Route::get('/groups/create', [\App\Http\Controllers\GroupController::class, 'create']);
Route::post('/groups', [\App\Http\Controllers\GroupController::class, 'store']);
Route::get('/groups/{id}', [\App\Http\Controllers\GroupController::class, 'show']);
Route::get('/groups/{id}/students/create', [\App\Http\Controllers\StudentController::class, 'create']);
Route::post('/groups/{id}/students', [\App\Http\Controllers\StudentController::class, 'store']);
Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\StudentController::class, 'index']);

Route::get('/clear-cache', function() {
    $clearCache = Artisan::call('cache:clear');
    $configCache = Artisan::call('config:cache');
});
