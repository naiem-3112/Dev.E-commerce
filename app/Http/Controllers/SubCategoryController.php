<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use File;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories = SubCategory::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.subCategory.index', compact('sub_categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.subCategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required|unique:sub_categories,name',
            'featured' => 'required',
            'status' => 'required'
        ]);

        $subCategory = new SubCategory();

        $subCategory->category_id = $request->category_id;
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name, '-');
        $subCategory->description = $request->description;
        $subCategory->position_id = $request->position_id;
        $subCategory->featured = $request->featured;
        $subCategory->status = $request->status;
        if ($request->hasFile('image')) {
            $originalName = $request->image->getClientOriginalName();
            $uniqueImageName = time().$originalName;
            $image = Image::make($request->image);
            // $image->resize(1430,469.22);
            $image->save(public_path().'/images/subCategory/'.$uniqueImageName);
            $product->image = $uniqueImageName;
        }
        $subCategory->save();

        Alert::toast('sub-category inserted successfully', 'success');

        return redirect()->back();
    }

    public function show(SubCategory $subCategory)
    {
        //
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.subCategory.edit', compact('subCategory', 'categories'));
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $this->validate($request, [
            'name' => "required|unique:sub_categories,name,$subCategory->id",
            'featured' => 'required',
            'status' => 'required'
        ]);

        $subCategory->category_id = $request->category_id;
        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name, '-');
        $subCategory->description = $request->description;
        $subCategory->position_id = $request->position_id;
        $subCategory->featured = $request->featured;
        $subCategory->status = $request->status;

        if ($request->hasFile('image')) {
            $image_path = public_path("images/subCategory/".$subCategory->image);
            if($image_path) {
                File::delete($image_path);
            }
            $originalName = $request->image->getClientOriginalName();
            $uniqueImageName = time().$originalName;
            $image = Image::make($request->image);
            // $image->resize(1430,469.22);
            $image->save(public_path().'/images/subCategory/'.$uniqueImageName);
            $subCategory->image = $uniqueImageName;
        }
        $subCategory->save();

        Alert::toast('sub-category updated successfully', 'success');

        return redirect()->route('subCategory.index');
    }

    public function destroy(SubCategory $subCategory)
    {
        if ($subCategory) {
            $image_path = public_path("images/subCategory/".$subCategory->image);
            if($image_path) {
                File::delete($image_path);
            }
            $subCategory->delete();

            Alert::toast('sub-category deleted successfully', 'success');

            return redirect()->route('subCategory.index');
        }
    }
}
