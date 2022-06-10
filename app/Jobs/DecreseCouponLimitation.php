<?php

namespace App\Jobs;

use App\Models\Admin\Coupon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DecreseCouponLimitation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $coupon_code;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($coupon_code)
    {
        $this->coupon_code = $coupon_code;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $original_coupon = Coupon::where('coupon',$this->coupon_code)->first();
        $original_coupon->update([
            'limitation' => --$original_coupon->limitation
        ]);
    }
}
