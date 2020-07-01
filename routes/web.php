<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', function(){
   return view('admin.dashboard');
})->name('admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
