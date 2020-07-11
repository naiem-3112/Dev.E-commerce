<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'product_id' => 'required'
        ]);

        $cart = new Cart();
        $cart->user_id = $request->user_id;
        $cart->product_id = $request->product_id;
        $cart->save();

        alert()->toast('success', 'insert into cart successfully');
        return back();
    }

    public function show(Cart $cart)
    {
        //
    }

    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'product_id' => 'required'
        ]);

        $cart->user_id = $request->user_id;
        $cart->product_id = $request->product_id;
        $cart->save();

        alert()->toast('success', 'update cart successfully');
        return back();
    }

    public function destroy(Cart $cart)
    {
        if($cart){
            $cart->delete();
            return back();
        }
        
    }
}
