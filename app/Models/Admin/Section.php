<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    
    use HasFactory; 

    protected $fillable = [
        'section_name'
    ];

    public function products() {
        return $this->belongsToMany(Product::class)->where('status',1);
    }
}
