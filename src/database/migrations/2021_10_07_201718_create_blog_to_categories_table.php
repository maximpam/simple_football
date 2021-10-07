<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_to_categories', function (Blueprint $table) {
            $table->bigInteger('blog_post_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();

            $table->foreign('blog_post_id')->references('id')->on('blog_posts');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_to_categories');
    }
}
