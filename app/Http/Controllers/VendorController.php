<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.vendor.index', compact('vendors'));
    }

    public function create()
    {
        return view('admin.vendor.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:vendors,name',
            'description' => 'required',
            'status' => 'required',
        ]);

        $vendor = new Vendor();

        $vendor->name = $request->name;
        $vendor->slug = Str::slug($request->name, '-');
        $vendor->description = $request->description;
        $vendor->status = $request->status;
        $vendor->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/vendor'), $uniqueImageName);
            $vendor->image = $uniqueImageName;
        }
        $vendor->save();

        Session::flash('success', 'vendor created successfully');

        return redirect()->back();
    }

    public function show(Vendor $vendor)
    {
        //
    }

    public function edit(Vendor $vendor)
    {
        return view('admin.vendor.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor)
    {
        $this->validate($request, [
            'name' => "required|unique:vendors,name,$vendor->id",
            'description' => 'required',
            'status' => 'required',
            'price' => 'required'
        ]);

        $vendor->name = $request->name;
        $vendor->slug = Str::slug($request->name, '-');
        $vendor->description = $request->description;
        $vendor->status = $request->status;
        $vendor->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $uniqueImageName = time() . '.' . $image->extension();
            $image->move(public_path('images/vendor'), $uniqueImageName);
            $vendor->image = $uniqueImageName;
        }
        $vendor->save();

        Session::flash('success', 'vendor updated successfully');

        return redirect()->route('vendor.index');
    }

    public function destroy(Vendor $vendor)
    {
        if ($vendor) {
            $vendor->delete();

            Session::flash('success', 'vendor deleted successfully');

            return redirect()->route('vendor.index');
        }
    }
}
