<?php

namespace App\Http\Controllers\Admin;


use App\Models\Admin\Brand;
use App\Models\Admin\Image;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Section;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products      = Product::with('images', 'category', 'subcategory', 'brand')->get();
        $categories    = Category::all();
        $subcategories = Subcategory::all();
        $brands        = Brand::all();
        $sections      = Section::all();
        return view('admin.pages.products', compact('products', 'categories', 'brands', 'subcategories', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        if ($request->sections) {
            $product->sections()->attach($request->sections);
        }

        foreach ($request->product_images as $image) {
            $path = Storage::put('uploads/products_images', $image);
            Image::create([
                'image_name' => $path,
                'product_id' => $product->id,
            ]);
        }
        return redirect()->route('products.index')->with('msg', [
            'msg' => 'Product added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        return view('admin.pages.single_product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories     = Category::all();
        $subcategories  = Subcategory::all();
        $brands         = Brand::all();
        $sections       = Section::all();

        return view('admin.pages.edit_product', compact('product', 'categories', 'subcategories', 'brands', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        if ($request->sections) {

            $product->sections()->detach();

            $product->sections()->attach($request->sections);
        }

        if ($request->product_images) {
            //Replace old images with images in request
            foreach (Image::where('product_id', $product->id)->get() as $image) {
                Storage::delete($image->image_name);
                Image::find($image->id)->delete();
            }

            foreach ($request->product_images as $image) {

                $path = Storage::put('uploads/products_images', $image);

                Image::create([
                    'image_name' => $path,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('products.index')->with('msg', [
            'msg' => 'Product updated successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $images = Image::where('product_id', $product->id)->get();

        if ($images) {
            foreach ($images as $image) {
                Storage::delete($image->image_name);
                Image::find($image->id)->delete();
            }
        }
        $product->delete();

        return redirect()->route('products.index')->with('msg', [
            'msg' => 'Product deleted successfully',
            'type' => 'error'
        ]);
    }

    /*
    **   Enable/disable product
    */
    public function reverseStatus(Product $product)
    {

        $product->status = $product->status ? 0 : 1;
        $product->save();

        return redirect()->route('products.index')->with('msg', [
            'msg' => 'Product activated successfully',
            'type' => 'success'
        ]);
    }
}
