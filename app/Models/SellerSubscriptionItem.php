<?php

namespace App\Models;

use Laravel\Cashier\SubscriptionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SellerSubscriptionItem extends SubscriptionItem
{
    use HasFactory;

    public function subscription()
    {
        return $this->belongsTo(SellerSubscription::class);
    }
}
