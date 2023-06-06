<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsToMany(Brand::class,'category_brands');
    }
    public function product()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
