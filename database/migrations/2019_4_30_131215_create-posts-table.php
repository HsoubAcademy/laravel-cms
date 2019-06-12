<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('title');
        	$table->string('slug')->unique();        	
        	$table->text('body');
            $table->string('image_path')->default('default.jpg');
            $table->integer('user_id')->unsigned();
            $table->boolean('approved')->default(false);
            $table->tinyInteger('category_id')->unsigned();
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
