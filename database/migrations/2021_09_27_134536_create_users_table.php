<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('fname', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 100)->nullable();

            $table->string('business_size', 100)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('company_url', 255)->nullable();
            $table->string('desc', 255)->nullable();
            $table->string('city', 100)->nullable();

            $table->string('profile_img', 255)->nullable();
            $table->string('banner_img', 255)->nullable();


            // foregin
            $table->bigInteger('department_id')->nullable()->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');

            $table->bigInteger('country_id')->nullable()->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->bigInteger('industry_id')->nullable()->unsigned();
            $table->foreign('industry_id')->references('id')->on('industries');


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
        Schema::dropIfExists('users');
    }
}
