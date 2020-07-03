<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'status' => 'required',
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->status = $request->status;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/product'), $uniqueImageName);
            $product->image = $uniqueImageName;
        }
        $product->save();

        Session::flash('success', 'product created successfully');

        return redirect()->back();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => "required|unique:products,name,$product->id",
            'description' => 'required',
            'status' => 'required',
            'price' => 'required'
        ]);

        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->status = $request->status;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/product'), $uniqueImageName);
            $product->image = $uniqueImageName;
        }
        $product->save();

        Session::flash('success', 'product updated successfully');

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        if ($product) {
            $product->delete();

            Session::flash('success', 'product deleted successfully');

            return redirect()->route('product.index');
        }
    }
}
