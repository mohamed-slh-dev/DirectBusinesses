<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ratings', function (Blueprint $table) {
            
            $table->id();

            $table->string('title', 255)->nullable();
            $table->integer('rating')->unsigned()->nullable();

            $table->text('comment')->nullable();
            $table->string('relationship', 255)->nullable();
            $table->string('reviewer_type', 100)->nullable();
            $table->date('date')->nullable();

            // foregin
            $table->bigInteger('reviewer_id')->nullable()->unsigned();
            $table->foreign('reviewer_id')->references('id')->on('users');

            $table->bigInteger('reviewed_id')->nullable()->unsigned();
            $table->foreign('reviewed_id')->references('id')->on('users');


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
        Schema::dropIfExists('user_ratings');
    }
}
