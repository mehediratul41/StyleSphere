<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart_item extends Model
{
    use HasFactory;
    protected $table = "cart_items";
    protected $primaryKey = "id";
    protected $fillable = ['cart_id','product_id','quantity'];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
