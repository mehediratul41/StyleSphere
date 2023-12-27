<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_item extends Model
{
    use HasFactory;
    protected $table = "order_items";
    protected $primaryKey = "item_id";
    protected $fillable = ['order_id','product_id','quantity','subtotal'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id','order_id');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','product_id');
    }

}
