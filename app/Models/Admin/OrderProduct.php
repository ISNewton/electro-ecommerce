<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
    ];

    /* protected $casts = [

        'price' => 'double',
        'quantity' => 'int',
    ]; */

    /* public function product() {
        return $this->belongsTo(Product::class);
        return $this->hasOne(Product::class,'id');
    }

    public function order() {
        return $this->belongsTo(Order::class,'id','order_id');
    } */
}
