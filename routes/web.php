<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SellerMerkController;
use App\Http\Controllers\DashboardMerkController;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\DahsboardBuyerController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashbordSellerController;
use App\Http\Controllers\SellerCategoryController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardCategoryController;


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


Route::get('/', [IndexController::class, 'index']);

Route::get('/shop', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::resource('/cart', KeranjangController::class);

Route::get('/about', function () {
    return view('about');
});


Route::get('/report', function () {
    return view('report');
});

Route::get('/seller', function () {
    return view('registerSeller');
});


// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('checkRole:admin');

// Route::get('/dashboardSeller', function () {
//     return view('dashboardSeller.index');
// })->middleware('checkRole:seller');

Route::get('/dashboard', [DashboardController::class, 'admin'])->middleware('checkRole:admin');

Route::get('/dashboardSeller', [DashboardController::class, 'seller'])->middleware('checkRole:seller');

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/verify', [LoginController::class, 'verify']);

Route::get('/block', [LoginController::class, 'block']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/admin/category', DashboardCategoryController::class);

Route::resource('/admin/merk', DashboardMerkController::class);

Route::resource('/admin/product', DashboardProductController::class);

Route::resource('/admin/user', DashboardAdminController::class);

Route::resource('/admin/buyer', DahsboardBuyerController::class);

Route::resource('/admin/seller', DashbordSellerController::class);

Route::post('/seller', [SellerController::class, 'store']);

Route::get('/verifySeller/{id}', [SellerController::class, 'verify']);

Route::get('/blockSeller/{id}', [SellerController::class, 'block']);

Route::resource('/sellerCategory', SellerCategoryController::class);

Route::resource('/sellerMerk', SellerMerkController::class);

Route::resource('/sellerProduct', SellerProductController::class);

Route::resource('/alamat', AlamatController::class);

Route::get('/profile/{id}', [ProfileController::class, 'index']);
Route::get('/dashboardSeller/profile/{id}', [ProfileController::class, 'indexSeller']);

Route::get('/toko/{id}', [TokoController::class, 'index']);

Route::get('/service/{id}', [ServiceController::class, 'index']);
Route::post('/service', [ServiceController::class, 'store']);
Route::get('/sellerService', [ServiceController::class, 'indexSeller']);
Route::get('/sellerService/{id}', [ServiceController::class, 'show']);

Route::get('/admin/transaksi', [TransaksiController::class, 'indexAdmin']);
Route::get('/sellerTransaksi', [TransaksiController::class, 'indexSeller']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('/verifyTransaksi/{id}', [TransaksiController::class, 'verify']);

Route::get('/report/{id}', [ReportController::class, 'index']);
Route::post('/report', [ReportController::class, 'store']);

Route::get('/admin/report', [ReportController::class, 'indexAdmin']);

// PAYMENT AWAL
Route::get('/payment', [PaymentController::class, 'payment']);
Route::post('/payment', [PaymentController::class, 'payment_post']);

// PAYMENT CART
// Route::get('/payment', [KeranjangController::class, 'payment']);
// Route::post('/payment', [KeranjangController::class, 'payment_post']);
