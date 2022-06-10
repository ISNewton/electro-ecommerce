<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin\Image;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::with('images','subcategory.category')->get();;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'product_name'        =>  'required|string',
            'product_quantity'    =>  'required|integer',
            'sell_price'          =>  'required|numeric|gt:discount_price',
            'discount_price'      =>  'required|numeric',
            'product_images.*'    =>  'required|image|max:4000',
            'product_images'      =>  'required',
            'subcategory_id'      =>  'nullable|integer',
            'brand_id'            =>  'nullable|string',
            'product_discription' =>  'required|string',
            'sections.*'          =>  'nullable|string'
        
    ];

        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()) {
            return response(['message' => $validation->errors()],402);
        }
        
    $product = [
        'product_name'              => $request->product_name,
        'product_quantity'          => $request->product_quantity,
        'sell_price'                => $request->sell_price,
        'discount_price'            => $request->discount_price == 0 ? null : $request->discount_price,
        'subcategory_id'            => $request->subcategory_id,
        'brand_id'                  => $request->brand_id,
        'product_discription'       => $request->product_discription,
        'product_images'             => $request->product_images,
        'sections'                  => $request->sections,
    ];

    return response($product,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::with('images','subcategory.category')->find($id);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
         if (!$product) {
            return response([
                'message' => 'Product not found'
            ],402);
        };

        $rules = [
            'product_name'        =>  'required|string',
            'product_quantity'    =>  'required|integer',
            'sell_price'          =>  'required|numeric|gt:discount_price',
            'discount_price'      =>  'nullable|numeric',
            'product_images.*'    =>  'nullable|image|max:4000',
            'subcategory_id'      =>  'nullable|integer',
            'brand_id'            =>  'nullable|integer',
            'product_discription' =>  'required|string',
            'sections.*'          =>  'nullable|integer'
    ];

    $validation = Validator::make($request->all(),$rules);
        if($validation->fails()) {
            return response(['message' => $validation->errors()],402);
        }

        $product = [
            'product_name'              => $request->product_name,
            'product_quantity'          => $request->product_quantity,
            'sell_price'                => $request->sell_price,
            'discount_price'            => $request->discount_price == 0 ? null : $request->discount_price,
            'subcategory_id'            => $request->subcategory_id,
            'brand_id'                  => $request->brand_id,
            'product_discription'       => $request->product_discription,
            'product_images'             => $request->product_images,
            'sections'                  => $request->sections,
        ];

        return response($product,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response([
                'message' => 'product not found'
            ],404);
        };
        return response([],200);
    }
}
