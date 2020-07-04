<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home(){
        $categories = Category::all();
        return view('front.home', compact('categories'));
    }
}
