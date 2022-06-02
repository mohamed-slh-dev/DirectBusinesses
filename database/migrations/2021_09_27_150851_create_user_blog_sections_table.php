<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBlogSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_blog_sections', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255)->nullable();
            $table->text('content')->nullable();

            // foregin
            $table->bigInteger('blog_id')->nullable()->unsigned();
            $table->foreign('blog_id')->references('id')->on('user_blogs');


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
        Schema::dropIfExists('user_blog_sections');
    }
}
