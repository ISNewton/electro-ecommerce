<?php

namespace App\Models\Admin;

use App\Models\User\Comment;
use App\Models\User\OrderItem;
use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_quantity',
        'sell_price',
        'discount_type',
        'discount_price',
        'subcategory_id',
        'brand_id',
        'product_discription',
    ];

    public function getPriceAttribute()
    {
      if ($this->discount_type == 'value') {
        return $this->sell_price - $this->discount_price;
      }

      if ($this->discount_type == 'percentage') {
        return $this->sell_price - ($this->discount_price/100) * $this->sell_price;
      }
      return $this->sell_price;
    }

    public function images() {
      return $this->hasMany(Image::class,'product_id','id');
    }

    public function subcategory() {
      return $this->belongsTo(Subcategory::class);
    }

    public function category() {
      return $this->belongsTo(Category::class);
    }

    public function brand() {
      return $this->belongsTo(Brand::class);
    }

    public function sections() {
      return $this->belongsToMany(Section::class);
    }

    public function comments() {
      return $this->hasMany(Comment::class,'id');
    }

    public function orders() {
      return $this->belongsToMany(Order::class);
    }
}
