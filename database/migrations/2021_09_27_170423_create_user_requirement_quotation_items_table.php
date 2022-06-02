<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRequirementQuotationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_requirement_quotation_items', function (Blueprint $table) {
            $table->id();

            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            

            // foregin
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('item_id')->nullable()->unsigned();
            $table->foreign('item_id')->references('id')->on('user_requirement_items');


            $table->bigInteger('req_quo_id')->nullable()->unsigned();
            $table->foreign('req_quo_id')->references('id')->on('user_requirement_quotations');


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
        Schema::dropIfExists('user_requirement_quotation_items');
    }
}
