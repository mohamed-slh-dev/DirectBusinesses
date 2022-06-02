<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRequirementQuotationClarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_requirement_quotation_clarifications', function (Blueprint $table) {
            $table->id();

            $table->text('message')->nullable();

            // foregin
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('user_requirement_quotation_clarifications');
    }
}
