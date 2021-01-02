<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory, Billable;

    public function subscriptions()
    {
        return $this->hasMany(SellerSubscription::class)->orderBy('created_at', 'desc');
    }
}
