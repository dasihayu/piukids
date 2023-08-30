<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopsController;
use Faker\Guesser\Name;
use GuzzleHttp\Middleware;
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

Route::get('/',[HomeController::class,'index']);

Route::get('artikel',[ArticlesController::class,"index"]);

Route::get('tentang-kami', [AboutController::class,'index']);

Route::get('belanja',[ShopsController::class,'index']);

Route::get('permainan',[GamesController::class,'index']);

Route::get('events',[EventsController::class,'index']);

Route::get('detail-barang/{shops:product}', [ShopsController::class,'show']);

Route::get('detail-artikel/{articles:title}',[ArticlesController::class,'show']);

Route::get('detail-permainan/{games:title}',[GamesController::class,'show']);

Route::get('pilih-ecommerce',[EcommerceController::class,'index']);

Route::get('admin/login',[LoginController::class,'index'])->name('login');

Route::post('admin/login',[LoginController::class,'authenticate'])->name('admin/login');
Route::get('admin/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){

    Route::get('admin/post', [AdminController::class, 'index']);

    Route::get('admin/post/create', [ArticlesController::class, 'create']) -> name('admin/post/create');

    Route::post('admin/post/save-post', [ArticlesController::class, 'store'])->name('admin/post/save-post');
    
    Route::get('admin/post/edit/{id}', [ArticlesController::class, 'edit'])->name('admin/post/edit');
    
    Route::post('admin/post/update-post/{id}', [ArticlesController::class, 'update'])->name('admin/post/update-post');

    Route::get('admin/post/delete/{id}', [ArticlesController::class, 'destroy'])->name('admin/post/delete');
});