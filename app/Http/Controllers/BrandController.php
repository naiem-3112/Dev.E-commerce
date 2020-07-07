<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.brand.index', compact('brands'));       
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:brands,name',
        ]);

        $brand = new Brand();

        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name, '-');
        $brand->description = $request->description;
        $brand->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/brand'), $uniqueImageName);
            $brand->image = $uniqueImageName;
        }
        $brand->save();

        Session::flash('success', 'brand created successfully');

        return redirect()->back();
    }

    public function show(Brand $brand)
    {
        //
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'name' => "required|unique:brands,name,$brand->id",
        ]);

        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name, '-');
        $brand->description = $request->description;
        $brand->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/brand'), $uniqueImageName);
            $brand->image = $uniqueImageName;
        }
        $brand->save();

        Session::flash('success', 'brand updated successfully');

        return redirect()->route('brand.index');
    }

    public function destroy(Brand $brand)
    {
        if ($brand) {
            $brand->delete();

            Session::flash('success', 'brand deleted successfully');

            return redirect()->route('brand.index');
        }
    }
}
