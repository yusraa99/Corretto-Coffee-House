<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }
    // public function order()
    // {
    //     return $this->hasOne(Order::class);
    // }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function ordershipment()
    {
        return $this->hasOne(Ordershipment::class);
    }
}
