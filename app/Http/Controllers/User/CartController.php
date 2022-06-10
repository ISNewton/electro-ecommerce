<?php

namespace App\Http\Controllers\User;

use App\Actions\CouponCheck;
use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon;
use Illuminate\Http\Request;
use App\Services\CartService;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
      $this->cartService = $cartService;
    }

    public function add_to_cart($id,Request $request) {

      $cart = $this->cartService->addProductToCart($id , $request->session()->get('cart'));

      $request->session()->put('cart',$cart);
      $this->calculate_total($request);

            return json_encode([
              'message' => 'Product added successfully',
              'type' => 'success'
            ]);
    }

      public function remove_product_from_cart($id,Request $request) {
        
          if($request->session()->get('cart')) {
            $cart = $this->cartService->removeProductFromCart($id , $request->session()->get('cart'));
            $request->session()->put('cart',$cart);
            $this->calculate_total($request);
          }

          return back()->with('msg',[
            'msg' => 'Product removed from cart',
            'type' => 'error'
          ]);
      }



      public function edit_product_quantity($id,Request $request) {

          if ($request->session()->get('cart')) {
            if ($request->input('quantity_action') == '+') {
              $cart = $this->cartService->increaseProductQuantity($id , $request->session()->get('cart'));
              }

            if ($request->input('quantity_action') == '-') {
              $cart = $this->cartService->decreaseProductQuantity($id , $request->session()->get('cart'));
              }

              $request->session()->put('cart',$cart);
              $this->calculate_total($request);
          }
          return redirect()->route('cart');
      }


      public function apply_coupon(Request $request , CouponCheck $couponCheck) {

        $request->validate([
          'code' => 'required|string|max:50'
        ]);

        $coupon = Coupon::where('coupon',$request->code)->get()->first();

        if($coupon) {

          if(!$couponCheck->check($coupon->coupon)) {
            return back()->with('msg',[
              'type' => 'error',
              'msg'  => 'coupon has reached usage limit'
          ]);

          }
          $request->session()->put('coupon',[
              'code'     => $coupon->coupon,
              'discount' => $coupon->discount
            ]);

          $this->calculate_total($request);

          return back()->with('msg',[
              'type' => 'success',
              'msg'  => 'Coupon (' . $request->code . ') applied successfully'
          ]);
        }

        return back()->with('msg',[
          'type' => 'error',
          'msg'  => 'Invalid coupon code'
      ]);

      }


      public function delete_coupon(Request $request) {

        if($request->session()->get('coupon')) {

          $request->session()->put('total',$request->session()->get('subtotal',));

          $request->session()->pull('coupon');

        }

        $this->calculate_total($request);

        return back()->with('msg',[
          'msg' => 'Coupon deleted successfully',
          'type' => 'success'
        ]);

      }

    public function calculate_total(Request $request) {

      // Check if user has added products to the cart
      if($request->session()->get('cart')) {
        $cart_status = $this->cartService->calculateTotal($request->session()->get('cart'),$request->session()->get('coupon'));

        $request->session()->put('subtotal',$cart_status['subtotal']);

        $request->session()->put('total',$cart_status['total']);

          $request->session()->put('coupon_amount',$cart_status['coupon_amount']);
        
      }
      else {

        $request->session()->put('subtotal',0);
        $request->session()->put('total',0);

      }
    }


}
