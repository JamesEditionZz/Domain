<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Packagecontroller;
use Illuminate\Support\Facades\App;


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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin2', function () {
    return view('admin2');
});

?>