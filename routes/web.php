<?php

use App\Http\Controllers\PreinscriptionController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




route::get('/home',[PreinscriptionController::class,'index'])->name('home.pre');

route::get('home/create',[PreinscriptionController::class,'create'])->name('home.cerate');

route::post('home/store',[PreinscriptionController::class,'store'])->name('home.store');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
