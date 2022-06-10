<?php

namespace App\Actions;

use App\Models\Admin\Coupon;


class CouponCheck {

    /**
     * check
     *
     * @param [string] $code
     * @return void
     */
    public function check($code) {

        $coupon = Coupon::where('coupon',$code)->first('limitation');
        return $coupon->limitation > 1 ? true : false;
    }
}