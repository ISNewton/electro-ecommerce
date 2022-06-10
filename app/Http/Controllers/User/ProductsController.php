<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //


    public function get_product($id) {

        $product = Product::with('images','category','subcategory')->findOrFail($id);
        $related_products = Product::with('images')
                                ->where('id','!=',$product->id)
                                ->where('subcategory_id',$product->subcategory_id)
                                ->get();

        return view('user.pages.single_product',compact('product','related_products'));
    }


    public function search_product($name) {

        str_replace(
            ['\\','%','_'],
            ['\\\\','\%','\_'],
            $name
        );

        $products = Product::with('images')->where('product_name','LIKE','%'.$name.'%')->limit(7)->get();

        return json_encode([
            'result' => $products
        ]);
    }
}
