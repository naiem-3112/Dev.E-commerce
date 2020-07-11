<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::orderBy('name', 'ASC')->paginate(20);
        return view('admin.language.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.language.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:languages,name',
            'code' => 'required',
            'status' => 'required',
        ]);

        $language = new Language();
        $language->name = $request->name;
        $language->code = $request->code;
        $language->status = $request->status;

        $language->save();

        Alert::toast('language inserted successfully', 'success');

        return redirect()->back();
    }

    public function show(Language $language)
    {
        //
    }

    public function edit(Language $language)
    {
        return view('admin.language.edit', compact('language'));
    }

    public function update(Request $request, Language $language)
    {
        $this->validate($request, [
            'name' => "required|unique:languages,name,$language->id",
            'code' => 'required',
            'status' => 'required',
        ]);

        $language->name = $request->name;
        $language->code = $request->code;
        $language->status = $request->status;

        $language->save();

        Alert::toast('language updated successfully', 'success');

        return redirect()->route('language.index');
    }

    public function destroy(Language $language)
    {
        if ($language) {
            $language->delete();

            Alert::toast('language deleted successfully', 'success');

            return redirect()->route('language.index');
        }
    }
}
