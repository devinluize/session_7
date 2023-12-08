<?php

use App\Http\Controllers\datacontroller;
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

Route::get('add_book', function () {
    return view('addbook');
})->name('add_book');
Route::get('view_book',[datacontroller::class,'view_book'])->name('view_book');
Route::get('regis/{lang}',[datacontroller::class,'regis']);
// Route::get('delete_book/{id}',[datacontroller::class,'deleteData'])->name('delete_book');
Route::get('dete_book/{id}',[datacontroller::class,'deletebook'])->name('delete_book');
Route::get('update_book/{id}',[datacontroller::class,'deletebook'])->name('update_book');


Route::post('store_book',[datacontroller::class,'store_book'])->name('store_book');
// http method -> get, post,delete,patch
// get untuk view
// post untuk kirim data
// delete -> untuk hapus
// patch -> untuk update
