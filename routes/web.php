<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontPageController@home');

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', 'TestController@test');

//Admin Routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    
//Admin Dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

//Category
    Route::resource('category', 'CategoryController');

//Sub Category
    Route::resource('subCategory', 'SubCategoryController');
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

//Cart
    Route::resource('cart', 'CartController');

//Currency
    Route::resource('currency', 'CurrencyController');

//Language
Route::resource('language', 'LanguageController');

//Settings
    route::get('setting', function(){
        return view('admin.setting');
    })->name('admin.setting');

    route::get('reset-password', function(){
        return view('admin.password.email');
    })->name('admin.reset-password');

    Route::resource('setting/general', 'SettingGeneralController');
    Route::resource('setting/social', 'SettingSocialController');
});
