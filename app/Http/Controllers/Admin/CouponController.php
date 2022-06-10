<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.pages.coupon',compact('coupons'));
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
            'coupon'        => 'required|string|unique:coupons',
            'discount'      => 'required|numeric|max:100',
            'limitation'    => 'required|numeric'
        ]);

        Coupon::create([
            'coupon'    => $request->coupon,
            'discount'  => $request->discount,
            'limitation'  => $request->limitation,
        ]);

        return redirect()->route('coupons.index')->with('msg',[
            'msg' => 'Coupon added successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return view('admin.pages.edit_coupon',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'coupon'        => 'required|string|unique:coupons,coupon,' . $coupon->id,
            'discount'      => 'required|numeric|max:100',
            'limitation'    => 'required|numeric|max:100'
        ]);

        $coupon->update([
            'coupon'        => $request->coupon,
            'discount'      => $request->discount,
            'limitation'    => $request->limitation,
        ]);

        return redirect()->route('coupons.index')->with('msg',[
            'msg' => 'Coupon updated successfully',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('coupons.index')->with('msg',[
            'msg' => 'Coupon deleted successfully',
            'type' => 'error'
        ]);
    }
}
