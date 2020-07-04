<?php

namespace App\Http\Controllers;

use App\SettingGeneral;
use Illuminate\Http\Request;

class SettingGeneralController extends Controller
{
    public function index()
    {
        $settingGeneral = SettingGeneral::all();
        return view('admin.setting.general.index', compact('settingGeneral'));
    }

    public function create()
    {
        return view('admin.setting.general.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(SettingGeneral $settingGeneral)
    {
        //
    }

    public function edit(SettingGeneral $settingGeneral)
    {
        //
    }

    public function update(Request $request, SettingGeneral $settingGeneral)
    {
        //
    }

    public function destroy(SettingGeneral $settingGeneral)
    {
        //
    }
}
