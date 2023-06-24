<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartGift extends Model
{
    protected $table = 'cart_gifts';

    protected $fillable = ['user_id', 'gift_id', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }
}
