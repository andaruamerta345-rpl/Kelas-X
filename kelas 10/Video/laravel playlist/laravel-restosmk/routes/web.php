<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekLogin;
use Illuminate\Support\Facades\Route;





// Halaman depan
Route::get('/', [FrontController::class, 'index']);
Route::get('show/{id}', [FrontController::class, 'show']);
Route::get('register', [FrontController::class, 'register']);
Route::get('login', [FrontController::class, 'login']);
Route::get('logout', [FrontController::class, 'logout']);

Route::post('postregister', [FrontController::class, 'store']);
Route::post('postlogin', [FrontController::class, 'postlogin']);

// Cart dan transaksi
Route::get('beli/{idmenu}', [CartController::class, 'beli']);
Route::get('hapus/{idmenu}', [CartController::class, 'hapus']);
Route::get('tambah/{idmenu}', [CartController::class, 'tambah']);
Route::get('kurang/{idmenu}', [CartController::class, 'kurang']);

Route::get('cart', [CartController::class, 'cart']);
Route::get('batal', [CartController::class, 'batal']);
Route::get('admin', [AuthController::class, 'index']);
Route::post('admin/postlogin', [AuthController::class, 'postlogin']);
Route::get('admin/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::group(['middleware' => ['ceklogin:admin']], function () {
    Route::resource('user', UserController::class);
    });

    Route::group(['middleware' => ['ceklogin:kasir']], function () {
        Route::resource('order', OrderController::class);
    });

    Route::group(['middleware' => ['ceklogin:manager']], function () {
        Route::resource('kategori', KategoriController::class);
        Route::resource('menu', MenuController::class);
        Route::get('select',[MenuController::class, 'select']);
        Route::post('postmenu/{id}',[MenuController::class, 'update']);
    });

});