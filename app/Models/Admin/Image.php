<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_name',
        'product_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
