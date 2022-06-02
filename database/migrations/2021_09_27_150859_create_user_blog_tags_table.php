<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBlogTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_blog_tags', function (Blueprint $table) {
            $table->id();

            // foregin
            $table->bigInteger('blog_id')->nullable()->unsigned();
            $table->foreign('blog_id')->references('id')->on('user_blogs');

            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->bigInteger('subcategory_id')->nullable()->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');

            
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
        Schema::dropIfExists('user_blog_tags');
    }
}
