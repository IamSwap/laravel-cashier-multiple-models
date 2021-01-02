<?php

namespace App\Models;

use Laravel\Cashier\Subscription;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SellerSubscription extends Subscription
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Seller::class);
    }

    public function items()
    {
        return $this->hasMany(SellerSubscriptionItem::class);
    }
}
