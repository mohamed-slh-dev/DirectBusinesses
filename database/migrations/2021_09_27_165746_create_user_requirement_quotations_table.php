<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRequirementQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_requirement_quotations', function (Blueprint $table) {
            $table->id();

            $table->string('attachments', 255)->nullable();
            $table->string('hide', 100)->nullable();
            $table->string('note', 255)->nullable();



            // foregin
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('requirement_id')->nullable()->unsigned();
            $table->foreign('requirement_id')->references('id')->on('user_requirements');


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
        Schema::dropIfExists('user_requirement_quotations');
    }
}
