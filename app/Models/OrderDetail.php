<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = "order_detail";
    protected $fillable = [
        'order_id','product_id','quantity'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id', 'order_id');
    }


}
