<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function product()
    {
        return $this->belongsToMany(Product::class,'product_orders');
    }
    public function receipt()
    {
        return $this->hasMany(Receipt::class);
    }
}
