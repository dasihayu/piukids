<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ShopsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('artikel',[ArticlesController::class,'index']);

Route::get('tentang-kami', [AboutController::class,'index']);

Route::get('belanja',[ShopsController::class,'index']);

Route::get('detail-barang/{shops:product}', [ShopsController::class,'show']);

Route::get('detail-artikel/{articles:title}',[ArticlesController::class,'show']);