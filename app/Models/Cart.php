<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $primaryKey = "cart_id";
    protected $fillable = ['user_id'];

    public function cart_items(): HasMany
    {
        return $this->hasMany(Cart_item::class,'cart_id', 'cart_id');
    }
}
