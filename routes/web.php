<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Admin Routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
//Admin Dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
//Category
    Route::resource('category', 'CategoryController');

//Brand
    Route::resource('brand', 'BrandController');

//Product
    Route::resource('product', 'ProductController');

//Vendor
    Route::resource('vendor', 'VendorController');

//Purchase
    Route::resource('purchase', 'PurchaseController');

//Employee
    Route::resource('employee', 'EmployeeController');

//Customer
    Route::resource('customer', 'CustomerController');

//Order
    Route::resource('order', 'OrderController');

//Sale
    Route::resource('sale', 'SaleController');
});

