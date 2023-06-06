<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Brand extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsToMany(Category::class,'category_brands');
    }
    public function product()
    {
        return $this->hasMany(Product::class,'brand_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

}
