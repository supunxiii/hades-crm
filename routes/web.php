<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalespersonController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceiptController;

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

Auth::routes();

Route::resource('/product', ProductController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/salesperson', SalespersonController::class);
Route::resource('/sale', SaleController::class);
Route::resource('/payment', PaymentController::class);
Route::resource('/receipt', ReceiptController::class);

Route::get('/products', [ProductController::class, 'showList']);
Route::get('/customers', [CustomerController::class, 'showList']);
Route::get('/salespersons', [SalespersonController::class, 'showList']);
Route::get('/sales', [SaleController::class, 'showList']);
Route::get('/payments', [PaymentController::class, 'showList']);
Route::get('/receipts', [ReceiptController::class, 'showList']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/index', function () {
    return view('admin.index');
});



