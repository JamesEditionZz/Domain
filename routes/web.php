<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Packagecontroller;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin2Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TemplateController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/pack',[Packagecontroller::class,'package']);

Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin2',[Admin2Controller::class,'index']);

Route::get('/template',[TemplateController::class,'index']);

Route::POST('/checkout',[CheckoutController::class,'checkout']);

?>