<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "products";
    protected $fillable = [
        'name','slug','image','category_id','price','status'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }


    public function orders() {
        return $this->belongsToMany(Order::class, 'order_detail','order_id','product_id')->withPivot('quantity');
    }

    // public function order_details()
    // {
    //     return $this->belongsToMany(OrderDetail::class)->withPivot('quantity');
    // }

}
