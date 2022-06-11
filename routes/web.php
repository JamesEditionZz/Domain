<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Packagecontroller;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin2Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ImageUploadController;


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

Route::get('pack',[Packagecontroller::class,'package']);

Route::get('admin',[AdminController::class,'index']);

Route::get('admin2',[Admin2Controller::class,'index']);

Route::get('template',[TemplateController::class,'index']);

Route::POST('checkout',[CheckoutController::class,'checkout']);

//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//select data tembussiness
Route::get('/add-image',[ImageUploadController::class,'table'])->name('table.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');
?>