<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\TransactionController;

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
    return view('index');
});
Route::get('/overview', function () {
    return view('admin.index');
});
Route::get('/products', function () {
    return view('admin.products');
});
Route::get('/transaction', function () {
    return view('admin.transaction');
});
// Route::get('/new-transaction', function () {
//     return view('admin.new-transaction');
// });
Route::get('/purchase-receive', function () {
    return view('admin.receive-order');
});
Route::get('/purchase-order', function () {
    return view('admin.purchase-order');
});
Route::get('/purchase-request', function () {
    return view('admin.purchase-request');
});
Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/members', function () {
    return view('admin.members');
});
Route::get('/profile', function () {
    return view('admin.profile');
});
Route::get('/products', [BarcodeController::class, 'generateBarcode']);
Route::get('/new-transaction', [TransactionController::class, 'index']);
Route::get('/search-products', [TransactionController::class, 'searchProducts'])->name('products.search');


Route::fallback(function () {
    return response()->view('error.404', [], 404);
});