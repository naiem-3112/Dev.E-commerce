<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SettingGeneral;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home(){
            $data =[
                'settingGeneral' => SettingGeneral::first(),
                'products' =>  Product::all(),
                'newProducts' => Product::orderBy('created_at', 'DESC')->take(3)->get(),
                'proCats' => Product::with(['category' => function($query){
                    $query->where('status', 1)->orderBy('position_id', 'DESC');
                }])->get(),
            ];
            return view('front.home')->with($data);
    }
}
