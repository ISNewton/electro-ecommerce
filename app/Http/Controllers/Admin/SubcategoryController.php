<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::with('products')->get();
        $categories    = Category::all();
        return view('admin/pages/subcategory',compact('subcategories','categories'));

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
            'subcategory_name'   => 'required|unique:subcategories',
            'category_id'        => 'required|integer',
            'thumbnail'          => 'required|mimes:jpg,jpeg,png,webp'
        ]);

        $path = Storage::put('uploads/category' , $request->thumbnail);

        Subcategory::create([
            'subcategory_name'  => $request->subcategory_name,
            'category_id'       => $request->category_id,
            'thumbnail'       => $path,
        ]);

        return redirect()->route('subcategory')->with('msg',[
            'msg' => 'Subcategory added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {

        return view('admin.pages.single_subcategory',compact('subcategory'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories  =  Category::all();
        return view('admin.pages.edit_subcategory',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'subcategory_name'  => 'required|unique:subcategories,subcategory_name,' . $subcategory->id,
            'category_id'       => 'required|integer',
            'thumbnail'         => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        if($request->thumbnail) {

            Storage::delete($subcategory->thumbnail);

            $subcategory->thumbnail = Storage::put('uploads/subcategory',$request->thumbnail);
        }

        $subcategory->subcategory_name   = $request->subcategory_name;
        $subcategory->category_id        = $request->category_id;
        $subcategory->save();

        return redirect()->route('subcategories.index')->with('msg',[
            'msg' => 'Subcategory updated successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategories.index')->with('msg',[
            'msg' => 'Subcategory deleted successfully',
            'type' => 'error'
        ]);
    }
}
