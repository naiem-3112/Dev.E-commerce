<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'status' => 'required',
            'image' => 'image|sometimes|nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $product = new Product();

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->status = $request->status;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $originalName = $request->image->getClientOriginalName();
            $uniqueImageName = time().$originalName;
            $image = Image::make($request->image);
            $image->resize(1430,469.22);
            $image->save(public_path().'/images/product/'.$uniqueImageName);
            $product->image = $uniqueImageName;
        }
        $product->save();

        Alert::toast('product inserted successfully', 'success');

        return redirect()->back();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => "required|unique:products,name,$product->id",
            'description' => 'required',
            'status' => 'required',
            'price' => 'required'
        ]);

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->status = $request->status;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $image_path = public_path("images/product/".$product->image);
            if($image_path) {
                File::delete($image_path);
            }
            $originalName = $request->image->getClientOriginalName();
            $uniqueImageName = time().$originalName;
            $image = Image::make($request->image);
            $image->resize(1430,469.22);
            $image->save(public_path().'/images/product/'.$uniqueImageName);
            $product->image = $uniqueImageName;
        }
        $product->save();

        //Session::flash('success', 'product updated successfully');
        Alert::toast('product updated successfully', 'success');

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        if ($product) {
            $image_path = public_path("images/product/".$product->image);
            if($image_path) {
                File::delete($image_path);
            }
            $product->delete();

            Alert::toast('product deleted successfully', 'success');
            return redirect()->route('product.index');
        }
    }
}
