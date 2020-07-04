<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home(){
        $categories = Category::where('status', 1)->orderBy('position_id', 'ASC')->get();
        return view('front.home', compact('categories'));
    }
}
