<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::orderBy('name', 'ASC')->paginate(20);
        return view('admin.currency.index', compact('currencies'));
    }

    public function create()
    {
        return view('admin.currency.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:currencies,name',
            'code' => 'required',
            'conversion_rate' => 'required',
            'status' => 'required',
        ]);

        $currency = new Currency();
        $currency->name = $request->name;
        $currency->code = $request->code;
        $currency->symbol = $request->symbol;
        $currency->conversion_rate = $request->conversion_rate;
        $currency->status = $request->status;

        $currency->save();

        Alert::toast('currency inserted successfully', 'success');

        return redirect()->back();
    }

    public function show(Currency $currency)
    {
        //
    }

    public function edit(Currency $currency)
    {
        return view('admin.currency.edit', compact('currency'));
    }

    public function update(Request $request, Currency $currency)
    {
        $this->validate($request, [
            'name' => "required|unique:currencies,name,$currency->id",
            'code' => 'required',
            'conversion_rate' => 'required',
            'status' => 'required',
        ]);

        $currency->name = $request->name;
        $currency->code = $request->code;
        $currency->symbol = $request->symbol;
        $currency->conversion_rate = $request->conversion_rate;
        $currency->status = $request->status;

        $currency->save();

        Alert::toast('currency updated successfully', 'success');

        return redirect()->route('currency.index');
    }

    public function destroy(Currency $currency)
    {
        if ($currency) {
            $currency->delete();

            Alert::toast('currency deleted successfully', 'success');

            return redirect()->route('currency.index');
        }
    }
}
