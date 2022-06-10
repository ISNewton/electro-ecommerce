<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\User\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    public function get_wishlist() {

      if(!Auth::check()) {
        return redirect()->route('login')->with('msg',[
          'msg' => 'Login / Register please',
          'type' => 'error'
        ]);

      }

        $wishlist = Wishlist::where('user_id',Auth::id())->get('product_id');
  
        $products = Product::with('images')->findMany($wishlist);
  
        return view('user.pages.wishlist',compact('products'));
      }


      public function add_to_wishlist($id) {

        if(!Auth::check()) {
          return json_encode([
            'type'    => 'error',
            'message' => 'Login first to add a product to wishlist'
          ]);
        }


          $product = Wishlist::where('product_id',$id)->where('user_id',Auth::id())->first();
          if($product) {
            return json_encode([
              'type'    => 'error',
              'message' => 'Product already added to wishlist'
            ]);
          } else {
            $favorite =  new Wishlist;
            $favorite->product_id = $id;
            $favorite->user_id = Auth::id();
            $favorite->save();
            return json_encode([
              'type'    => 'success',
              'message' => 'Product added successfully'
            ]);
          }
      }




      public function delete_product_from_wishlist(Request $req) {

        $req->validate([
            'id'  => 'integer'
        ]);

        Wishlist::where('user_id',Auth::id())->where('product_id',$req->id)->delete();

        return back()->with('msg',[
          'msg' => 'Product deleted successfully',
          'type' => 'success'
        ]);;

      }
  

}
