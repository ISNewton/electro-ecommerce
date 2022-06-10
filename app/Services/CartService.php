<?php

namespace App\Services;

use App\Models\Admin\Product;
use App\Models\Admin\Setting;
use Exception;

class CartService
{

  /**
    *  CartService class is responsiple for user cart operations such as :
    * Add product to cart
    * Remove product from cart
    * Increase / decrease product quantity
  */

    public function addProductToCart($product_id, $cart)
    {
    // Check if user has already added a product to cart
        if ($cart) {
            $ids = $this->getProductsIds($cart);

            if (!in_array($product_id, $ids)) {
                $cart[] = [
                'id' => $product_id,
                'quantity' => 1,
                'product' => Product::with('images')->find($product_id)
              ];
            }
        } else {
            $cart[] = [
            'id' => $product_id,
            'quantity' => 1,
            'product' => Product::with('images')->find($product_id)
          ];
        }
    
        return $cart;
}


  public function removeProductFromCart($product_id , $cart) {
    $ids = $this->getProductsIds($cart);
    if($cart && in_array($product_id,$ids)) {

      foreach($cart as $key => $product) {
        if($product['id'] == $product_id) {
          unset($cart[$key]);
          break;
        }
      }
    }
      return $cart;
    }

    public function increaseProductQuantity($product_id , $cart) {
      $ids = $this->getProductsIds($cart);
      if($cart && in_array($product_id , $ids)) {

        foreach ($cart as $key => $product) {
          if($product['id'] == $product_id) {
            if($product['quantity'] <  $product['product']->product_quantity) {
              ++$cart[$key]['quantity'];
            }
          }
        }

      }
      return $cart;
    }

    public function decreaseProductQuantity($product_id , $cart) {
      $ids = $this->getProductsIds($cart);
      if($cart && in_array($product_id , $ids)) {

        foreach ($cart as $key => $product) {
          if($product['id'] == $product_id) {
            if($product['quantity'] > 1) {
              --$cart[$key]['quantity'];
            }
          }
        }

      }
      return $cart;
    }

    public function getProductsIds($cart):array {
    /*
     *  initialize an array that contains all products ids : [3,4,2,1]
     */
     $ids = [];
     if($cart) {
       foreach ($cart as $product) {
           $ids[] = $product['id'];
       }
     }
     return $ids;
    }

    public function calculateTotal($cart , $coupon) {
      if($cart) {
        $total = 0;

        foreach($cart as $product) {

          $total = $total + ($product['quantity'] * $product['product']->price );
        }

        $subtotal = $total;

        if($coupon) {
          $coupon_amount = ($coupon['discount'] / 100) * $total ; // total - (discount / 100) * total

          $total -= $coupon_amount;
        }

        //Add the shipping Fee to total
        $total = $total + Setting::first()->shipping;

        return [
          'subtotal' => $subtotal,
          'total' => $total,
          'coupon_amount' => $coupon_amount ?? 0,

        ];
      }
    }
}
