<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;


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


Route::get('/Home', [HomeController::class,'Home'] );


Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [ProdiController::class,'Prodi'] );
    Route::get('/Teknik-informatika', [ProdiController::class,'Prodi2'] );
    
    });

Route::get('/News/{id}', [NewsController::class,'news'] );

Route::prefix('Sarana')->group(function () {
    Route::get('/Perkantoran', [SaranaController::class,'Kantor'] );
    Route::get('/Labotarium', [SaranaController::class,'Labor'] );
    Route::get('/Kelas', [SaranaController::class,'Kelas'] );
    Route::get('/Lainnya', [SaranaController::class,'Lainnya'] );
    });

Route::get('/about', [AboutController::class,'About'] );

Route::get('/comment/{nama}/{pesan}', [CommentController::class,'Comment'] );

