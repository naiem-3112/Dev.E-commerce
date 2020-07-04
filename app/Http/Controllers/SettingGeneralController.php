<?php

namespace App\Http\Controllers;

use App\SettingGeneral;
use Illuminate\Http\Request;
use Session;

class SettingGeneralController extends Controller
{
    public function index()
    {
        $settingGeneral = SettingGeneral::first();
        return view('admin.setting.general.index', compact('settingGeneral'));
    }

    public function create()
    {
        return view('admin.setting.general.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'welcome_msg' => 'required',
            'cell' => 'required',
            'moto' => 'required',
            'copyright' => 'required',
            'logo' => 'required',
        ]);

        $settingGeneral = new SettingGeneral();

        $settingGeneral->welcome_msg = $request->welcome_msg;
        $settingGeneral->cell = $request->cell;
        $settingGeneral->moto = $request->moto;
        $settingGeneral->copyright = $request->copyright;

        if ($request->hasFile('logo')) {
            $logo = $request->logo;
            $uniqueImageName = time() . '.' . $logo->extension();
            $logo->move(public_path('logo/website'), $uniqueImageName);
            $settingGeneral->logo = $uniqueImageName;
        }
        $settingGeneral->save();

        Session::flash('success', 'category created successfully');

        return redirect()->back();
    }

    public function show(SettingGeneral $settingGeneral)
    {
        //
    }

    public function edit(SettingGeneral $settingGeneral)
    {
        return view('admin.setting.general.edit', compact('settingGeneral'));
    }

    public function update(Request $request, SettingGeneral $settingGeneral)
    {
        $this->validate($request, [
            'welcome_msg' => 'required',
            'cell' => 'required',
            'moto' => 'required',
            'copyright' => 'required',
            'logo' => 'required',
        ]);

        $settingGeneral->welcome_msg = $request->welcome_msg;
        $settingGeneral->cell = $request->cell;
        $settingGeneral->moto = $request->moto;
        $settingGeneral->copyright = $request->copyright;

        if ($request->hasFile('logo')) {
            $logo = $request->logo;
            $uniqueImageName = time() . '.' . $logo->extension();
            $logo->move(public_path('logo/website'), $uniqueImageName);
            $settingGeneral->logo = $uniqueImageName;
        }
        $settingGeneral->save();


        Session::flash('success', 'general setting updated successfully');

        return redirect()->route('general.index');
    }

    public function destroy(SettingGeneral $settingGeneral)
    {
        if ($settingGeneral) {
            $settingGeneral->delete();

            Session::flash('success', 'general setting deleted successfully');

            return redirect()->route('general.index');
        }
    }
}
