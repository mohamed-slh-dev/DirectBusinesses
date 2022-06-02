<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDealRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_deal_requests', function (Blueprint $table) {
            
            $table->id();

            $table->string('status', 100)->nullable()->default('on going');

            
            $table->string('attachments', 255)->nullable();
            $table->string('notes', 255)->nullable();


            // foregin
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('deal_id')->nullable()->unsigned();
            $table->foreign('deal_id')->references('id')->on('user_deals');

            

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
        Schema::dropIfExists('user_deal_requests');
    }
}
