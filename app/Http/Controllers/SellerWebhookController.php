<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Laravel\Cashier\Http\Controllers\WebhookController;

class SellerWebhookController extends WebhookController
{
    protected function getUserByStripeId($stripeId)
    {
        return Seller::where('stripe_id', $stripeId)->first();
    }
}
