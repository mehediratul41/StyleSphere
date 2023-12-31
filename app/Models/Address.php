<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;
    protected $table = "addresses";
    protected $primayKey = "address_id";
    protected $fillable = ['user_id','street_address','city','zip_code','country'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }


}
