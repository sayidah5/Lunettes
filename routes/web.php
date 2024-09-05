<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::get('/',function(){
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/index', [UserController::class, 'showindex']);
Route::get('/', [UserController::class, 'login']);
Route::get('/home', [UserController::class, 'index']);
Route::get('/categories',[UserController::class, 'categories']);
Route::post('/auth', [UserController::class,'auth']);
Route::get('/logout', [UserController::class, 'logout']);
// Route::get('/loginuser', [UserController::class, 'loginuser']);
// Route::post('/authuser', [UserController::class,'authuser']);
Route::get('/detailproduk/{id}',[UserController::class, 'detailproduk']);
Route::get('/checkout',[UserController::class,'checkout']);
Route::get('/keranjang',[UserController::class,'keranjang']);
Route::post('/keranjang/{produk:id}',[KeranjangController::class,'addchart'])->name('cart.add');
Route::get("/delete-cart/{id}",[KeranjangController::class,"delete"]);
    Route::get('/produk',[ProdukController::class,'show']);
    Route::post('/search',[ProdukController::class,'search']);
    Route::get('/produk/create',[ProdukController::class,'create']);
    Route::post('/produk/create',[ProdukController::class,'add']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/edit/{id}',[ProdukController::class,'update']);
    Route::get('/produk/delete/{id}',[ProdukController::class,'delete']);
    // user
    Route::get('/user',[UserController::class,'show']);
    Route::post('/search',[UserController::class,'search']);
    Route::get('/user/create',[UserController::class,'create']);
    Route::post('/user/create',[UserController::class,'add']);
    Route::get('/user/edit/{id}',[UserController::class,'edit']);
    Route::post('/user/edit/{id}',[UserController::class,'update']);
    Route::get('/user/delete/{id}',[UserController::class,'delete']);




