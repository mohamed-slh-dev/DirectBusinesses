<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAuctionBidItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_auction_bid_items', function (Blueprint $table) {
            $table->id();

            $table->integer('price')->nullable();

            // foregin
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('item_id')->nullable()->unsigned();
            $table->foreign('item_id')->references('id')->on('user_auction_items');


            $table->bigInteger('auction_bid_id')->nullable()->unsigned();
            $table->foreign('auction_bid_id')->references('id')->on('user_auction_bids');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_auction_bid_items');
    }
}
