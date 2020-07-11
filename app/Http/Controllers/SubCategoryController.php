<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

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
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/subCategory'), $uniqueImageName);
            $subCategory->image = $uniqueImageName;
        }
        $subCategory->save();

        //Session::flash('success', 'subCategory created successfully');
        alert()->success('success','subCategory created successfully');

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
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/subCategory'), $uniqueImageName);
            $subCategory->image = $uniqueImageName;
        }
        $subCategory->save();

        //Session::flash('success', 'subCategory updated successfully');
        alert()->success('success','subCategory updated successfully');

        return redirect()->route('subCategory.index');
    }

    public function destroy(SubCategory $subCategory)
    {
        if ($subCategory) {
            $subCategory->delete();

            //Session::flash('success', 'subCategory deleted successfully');
            alert()->success('success','subCategory deleted successfully');

            return redirect()->route('subCategory.index');
        }
    }
}
