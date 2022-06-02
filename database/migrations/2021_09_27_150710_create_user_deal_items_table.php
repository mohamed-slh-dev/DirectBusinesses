<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDealItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_deal_items', function (Blueprint $table) {

            $table->id();

            $table->string('name', 255)->nullable();
            $table->integer('min_quantity')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->text('desc')->nullable();
            $table->date('date')->nullable();

            // foregin
            $table->bigInteger('deal_id')->nullable()->unsigned();
            $table->foreign('deal_id')->references('id')->on('user_deals');

            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->bigInteger('subcategory_id')->nullable()->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');

            $table->bigInteger('type_id')->nullable()->unsigned();
            $table->foreign('type_id')->references('id')->on('types');

            $table->bigInteger('measuringunit_id')->nullable()->unsigned();
            $table->foreign('measuringunit_id')->references('id')->on('measuringunits');


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
        Schema::dropIfExists('user_deal_items');
    }
}
