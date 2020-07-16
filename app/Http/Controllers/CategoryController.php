<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
            'featured' => 'required',
            'status' => 'required'
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->description = $request->description;
        $category->position_id = $request->position_id;
        $category->featured = $request->featured;
        $category->status = $request->status;

        if ($request->hasFile('image')) {
            $originalName = $request->image->getClientOriginalName();
            $uniqueImageName = time().$originalName;
            $image = Image::make($request->image);
            // $image->resize(1430,469.22);
            $image->save(public_path().'/images/category/'.$uniqueImageName);
            $category->image = $uniqueImageName;
        }
        $category->save();

        Alert::toast('category inserted successfully', 'success');

        return redirect()->back();
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => "required|unique:categories,name,$category->id",
            'featured' => 'required',
            'status' => 'required'
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->description = $request->description;
        $category->position_id = $request->position_id;
        $category->featured = $request->featured;
        $category->status = $request->status;

        if ($request->hasFile('image')) {
            $image_path = public_path("images/category/".$category->image);
            if($image_path) {
                File::delete($image_path);
            }
            $originalName = $request->image->getClientOriginalName();
            $uniqueImageName = time().$originalName;
            $image = Image::make($request->image);
            // $image->resize(1430,469.22);
            $image->save(public_path().'/images/category/'.$uniqueImageName);
            $category->image = $uniqueImageName;
        }
        
        $category->save();

        Alert::toast('category updated successfully', 'success');

        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        if ($category) {
            $image_path = public_path("images/category/".$category->image);
            if($image_path) {
                File::delete($image_path);
            }
            $category->delete();

            Alert::toast('category deleted successfully', 'success');

            return redirect()->route('category.index');
        }
    }
}
