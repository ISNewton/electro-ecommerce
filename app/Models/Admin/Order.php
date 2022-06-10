<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'country',
        'firt_address',
        'second_address',
        'city',
        'state',
        'zip_code',
        'comment',
        'subtotal',
        'coupon',
        'total',
        'status',
    ];

    /* public function order_items() {
        return $this->hasMany(OrderItem::class,'id');
    } */

    /* public function products() {
        return $this->belongsToMany(Product::class, 'order_items')
            ->using(OrderItem::class)
            ->withPivot([
                'price',
                'quantity',
            ]);
    } */

    public function products() {
        return $this->belongsToMany(Product::class)
                    ->withPivot([
                        'price',
                        'quantity',
                    ]);
            
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

