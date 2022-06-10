<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.pages.brand',compact('brands'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_name'  => 'required|string|unique:brands',
            'brand_logo'  => 'required|mimes:jpg,jpeg,png,webp'
        ]);

        $path = Storage::put('uploads/brands',$request->brand_logo);

        Brand::create([
            'brand_name' => $request->brand_name,
            'brand_logo' => $path,
        ]);


        return redirect()->route('brands.index')->with('msg',[
            'msg' => 'Brand added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Brand $brand)
    {
        return view('admin.pages.single_brand',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand )
    {
        return view('admin.pages.edit_brand',compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'brand_name'  => 'required|string|unique:brands,brand_name,'. $brand->id,
            'brand_logo'  => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        if($request->brand_logo) {

            Storage::delete($brand->brand_logo);

            $path = Storage::put('uploads/brands',$request->brand_logo);

            $brand->update([
                'brand_logo' => $path
            ]);
        }

        $brand->update([
            'brand_name' => $request->brand_name
        ]);

        return redirect()->route('brands.index')->with('msg',[
            'msg' => 'Brand updated successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Storage::delete($brand->brand_logo);

        $brand->delete();

        return redirect()->route('brands.index')->with('msg',[
            'msg' => 'Brand deleted successfully',
            'type' => 'error'
        ]);
    }
}
