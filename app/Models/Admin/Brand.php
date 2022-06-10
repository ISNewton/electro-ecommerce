<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand_name',
        'brand_logo'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
