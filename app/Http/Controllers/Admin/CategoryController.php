<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.pages.category',compact('categories'));
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
            'category_name' => 'required|unique:categories',
            'thumbnail'     => 'required|mimes:jpg,jpeg,png,webp'
        ]);

        $path = Storage::put('uploads/category' , $request->thumbnail);

        Category::create([
            'category_name' => $request->category_name,
            'thumbnail'     => $path
        ]);


        return redirect()->route('categories.index')->with('msg',[
            'msg' => 'Category added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.pages.single_category',compact('category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,' . $category->id,
            'thumbnail'     => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        if($request->thumbnail) {

            Storage::delete($category->thumbnail);

            $category->thumbnail = Storage::put('uploads/category',$request->thumbnail);


        }

        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->route('categories.index')->with('msg',[
            'msg' => 'Category updated successfully',
            'type' => 'seccess'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.pages.edit_category' ,compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category , Request $request)
    {
        Storage::delete($category->thumbnail);

        $category->delete();

        return redirect()->route('categories.index')->with('msg',[
            'msg' => 'Category deleted successfully',
            'type' => 'error'
        ]);
    }


    public function get_categories($id)
    {
      $categories = Subcategory::where('category_id',$id)->get();

      return json_encode($categories);
    }
}
