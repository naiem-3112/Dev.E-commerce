<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SettingGeneral;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home(){
            $settingGeneral = SettingGeneral::first();
            $products = Product::all();
            $newProducts = Product::orderBy('created_at', 'DESC')->take(3)->get();
            return view('front.home', compact('settingGeneral', 'products', 'newProducts'));


    }
}
