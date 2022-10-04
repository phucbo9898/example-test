<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = ['code','fullname','status'];

    // public function product() {
    //     return $this->belongsToMany(Product::class, 'order_detail','order_id','product_id');
    // }
    public function product() {
        return $this->belongsToMany(Product::class, 'order_detail','order_id','product_id');
    }

    // public function details()
    // {
    //     return $this->hasMany(OrderDetail::class);
    // }
}
