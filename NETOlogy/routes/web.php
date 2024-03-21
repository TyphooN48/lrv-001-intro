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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', [\App\Http\Controllers\UserInfo::class, 'index']);
});
