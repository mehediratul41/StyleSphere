<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primaryKey = "order_id";
    protected $fillable = ['user_id','total_amount','status','shipping_address_id'];
    // protected $casts = [
    //     'shipping_address_id' => 'integer',
    // ];

    public function order_items():HasMany
    {
        return $this->hasMany(Order_item::class, 'order_id', 'order_id');

    }
}
