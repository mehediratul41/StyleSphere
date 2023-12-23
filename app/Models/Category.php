<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "category_id";

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'category_id', 'category_id');
    }



}
