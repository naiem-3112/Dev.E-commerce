<?php

namespace App\Http\Controllers;

use App\Category;
use App\SettingGeneral;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home(){
        $categories = Category::orderBy('position_id', 'ASC')->get();
        $settingGeneral = SettingGeneral::first();
        return view('front.home', compact('categories', 'settingGeneral'));
    }
}
