<?php

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProdukController;
use App\Models\ProdukModel;
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

Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('produk', ProdukController::class);
Route::put('produk', [ProdukModel::class, 'update']);
