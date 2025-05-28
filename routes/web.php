<?php

//use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;
//use App\Http\Controllers\DataController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/user/{id}', function ($id) {
//     return 'User dengan ID' . $id;
// });
// Route::prefix('admin')->group(function () {
//     Route:: get ('/dashboard', function () {
//         return 'Admin Users';
//     });
//     Route::get('/welcome', function () {
//     return view('welcome');
//     }
// });
//Route::get('/makeview', [DataController::class,'tampilkan']);
// Route ::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });
// // Route::get('/listbarang/{id}/{nama}', function($id, $nama){
// //     return view('list_barang', compact('id', 'nama'));
// //});

// Route::get('/listbarang/{id}/{nama}',[ListBarangController::class,'tampilkan']);
Route::get('/listproduk', [ListProdukController::class,'show']);
//Route::get('/products', [ProductController::class,'index']);

//Route::get('/home', function() {
    //return view('pages/home');
//});