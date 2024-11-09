<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/overview', function () {
    return view('admin.index');
});
Route::get('/', function () {
    return view('index');
});

// CATEGORY
Route::get('products/categories', [CategoryController::class, 'index'])->name('category.index');
Route::post('/products/categories/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/products/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::put('/products/categories/{id}', [CategoryController::class, 'update'])->name('category.update');

// PRODUCT
route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/products/{encryptedId}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/edit/{encryptedId}', [ProductController::class, 'update_product'])->name('product.update');
Route::put('/products/{encryptedId}/update-image', [ProductController::class, 'update_image'])->name('product.image.update');
Route::put('/products/{encryptedId}/update-product', [ProductController::class, 'update_product_action'])->name('product.update.action');

// TRANSACTION
route::get('new-transaction', [TransactionController::class, 'index'])->name('transaction.index');



// Rute untuk proses login
// Route::post('/overview', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/', function () {
//     return view('index');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::middleware(['role:superadmin'])->group(function () {
//         Route::get('/users', function () {
//             return view('admin.users');
//         });
//         Route::get('/members', function () {
//             return view('admin.members');
//         });
//     });
//     Route::middleware(['role:admin'])->group(function () {
//         Route::get('/categories', [CategoryController::class, 'index']);
//         Route::get('/products', function () {
//             return view('admin.products');
//         });
//     });
//     Route::middleware(['role_id:3'])->group(function () {
        
//     });
    
//     // Route::middleware(['auth', 'check.roles'])->group(function () {
//     //     Route::get('/categories', [CategoryController::class, 'index']);
//     //     Route::get('/products', function () {
//     //         return view('admin.products');
//     //     });
//     // });
//     Route::get('/profile', function () {
//         return view('admin.profile');
//     });
// });

// SUPERADMIN
// Route::middleware(['auth'])->group(function () {
//     Route::get('/overview', [DashboardController::class, 'index'])->name('superadmin.dashboard');
//     Route::get('/transaction', function () {
//         return view('admin.transaction');
//     });
//     Route::get('/new-transaction', [TransactionController::class, 'index']);
//     Route::get('/users', function () {
//         return view('admin.users');
//     });
//     Route::get('/members', function () {
//         return view('admin.members');
//     });
//     Route::get('/purchase-receive', function () {
//         return view('admin.receive-order');
//     });
//     Route::get('/purchase-order', function () {
//         return view('admin.purchase-order');
//     });
//     Route::get('/purchase-request', function () {
//         return view('admin.purchase-request');
//     });
//     Route::get('/profile', function () {
//         return view('admin.profile');
//     });
//     Route::get('/categories', [CategoryController::class, 'index']);
    // Route::get('/products', [BarcodeController::class, 'generateBarcode']);
//     Route::get('/new-transaction', [TransactionController::class, 'index']);
// });

// // SUPERADMIN
// Route::middleware(['auth','role_id:1'])->group(function () {
//     Route::get('/overview', [DashboardController::class, 'index'])->name('superadmin.dashboard');
//     Route::get('/transaction', function () {
//         return view('admin.transaction');
//     });
//     Route::get('/new-transaction', [TransactionController::class, 'index']);
//     Route::get('/users', function () {
//         return view('admin.users');
//     });
//     Route::get('/members', function () {
//         return view('admin.members');
//     });
//     Route::get('/purchase-receive', function () {
//         return view('admin.receive-order');
//     });
//     Route::get('/purchase-order', function () {
//         return view('admin.purchase-order');
//     });
//     Route::get('/purchase-request', function () {
//         return view('admin.purchase-request');
//     });
    
// });
// // ADMIN
// Route::middleware(['auth', 'role_id:2'])->group(function () {
//     Route::get('/overview', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('/transaction', function () {
//         return view('admin.transaction');
//     });
//     Route::get('/new-transaction', [TransactionController::class, 'index']);
//     Route::get('/members', function () {
//         return view('admin.members');
//     });
//     Route::get('/purchase-receive', function () {
//         return view('admin.receive-order');
//     });
//     Route::get('/purchase-order', function () {
//         return view('admin.purchase-order');
//     });
//     Route::get('/purchase-request', function () {
//         return view('admin.purchase-request');
//     });
//     Route::get('/profile', function () {
//         return view('admin.profile');
//     });
// });
// // CASHIER
// Route::middleware(['auth', 'role_id:3'])->group(function () {
//     Route::get('/overview', [DashboardController::class, 'index'])->name('cashier.dashboard');
//     Route::get('/transaction', function () {
//         return view('admin.transaction');
//     });
//     Route::get('/new-transaction', [TransactionController::class, 'index']);
//     Route::get('/members', function () {
//         return view('admin.members');
//     });
//     Route::get('/purchase-receive', function () {
//         return view('admin.receive-order');
//     });
//     Route::get('/purchase-order', function () {
//         return view('admin.purchase-order');
//     });
//     Route::get('/purchase-request', function () {
//         return view('admin.purchase-request');
//     });
// });
// Route::get('/search-products', [TransactionController::class, 'searchProducts'])->name('products.search');

Route::fallback(function () {
    return response()->view('error.404', [], 404);
});