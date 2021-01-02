<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerSubscriptionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_subscription_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_subscription_id');
            $table->string('stripe_id')->index();
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamps();

            // Short key name to support 64 character limit- http://dev.mysql.com/doc/refman/5.5/en/identifiers.html
            $table->unique(['seller_subscription_id', 'stripe_plan'], 'seller_subscription_id_stripe_plan_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_subscription_items');
    }
}
