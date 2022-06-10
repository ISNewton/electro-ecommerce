<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'thumbnail',
    ];

    public function getRouteKeyName()
    {
        return 'category_name';
    }

    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    public function products() {
        return $this->hasManyThrough(Product::class,Subcategory::class)->where('status',1);
    }
}
