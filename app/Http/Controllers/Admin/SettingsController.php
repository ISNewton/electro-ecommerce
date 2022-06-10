<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //
    public function update_settings(Request $request) {

        $request->validate([
            'name'          => 'required|string',
            'logo'          => 'nullable|mimes:jpg,jpeg,png,webp',
            'email'         => 'required|email:filter',
            'phone'         => 'required|string',
            'address'       => 'required|string',
            'discription'   => 'required|string',
            'shipping'      => 'required|numeric',
        ]);

        $settings = Setting::first();

        $settings->name         = $request->name;
        $settings->email        = $request->email;
        $settings->phone        = $request->phone;
        $settings->address      = $request->address;
        $settings->discription  = $request->discription;
        $settings->shipping     = $request->shipping;


        if($request->logo) {
            Storage::put('uploads/settings',$request->logo);
        }

        $settings->save();

        return redirect()->route('settings')->with('msg',[
            'msg' => 'Settings updated successfully',
            'type' => 'success'
        ]);;
    }
}
