<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_to_categories', function (Blueprint $table) {
            $table->bigInteger('news_post_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();


            $table->foreign('news_post_id')->references('id')->on('news_posts');
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
        Schema::dropIfExists('news_to_categories');
    }
}
