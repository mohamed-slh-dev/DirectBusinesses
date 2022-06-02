<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAuctionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_auction_items', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->text('desc')->nullable();



            // foregin
            $table->bigInteger('auction_id')->nullable()->unsigned();
            $table->foreign('auction_id')->references('id')->on('user_auctions');

            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->bigInteger('subcategory_id')->nullable()->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');


            $table->bigInteger('measuringunit_id')->nullable()->unsigned();
            $table->foreign('measuringunit_id')->references('id')->on('measuringunits');


            $table->bigInteger('type_id')->nullable()->unsigned();
            $table->foreign('type_id')->references('id')->on('types');

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
        Schema::dropIfExists('user_auction_items');
    }
}
