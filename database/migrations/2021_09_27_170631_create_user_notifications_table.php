<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->id();

            $table->string('user_type', 100)->nullable();
            $table->string('title', 100)->nullable();
            $table->text('desc')->nullable();

            $table->time('time')->nullable();
            $table->date('date')->nullable();
            


            // foregin
            $table->bigInteger('receiver_id')->nullable()->unsigned();
            $table->foreign('receiver_id')->references('id')->on('users');

            $table->bigInteger('sender_id')->nullable()->unsigned();
            $table->foreign('sender_id')->references('id')->on('users');
            

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
        Schema::dropIfExists('user_notifications');
    }
}
