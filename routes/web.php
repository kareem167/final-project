<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;



use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index']);
 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get('/home',[AdminController::class,'index']);



Route::get('/category_page',[AdminController::class,'category_page']);
Route::post('/add_category',[AdminController::class,'add_category']);