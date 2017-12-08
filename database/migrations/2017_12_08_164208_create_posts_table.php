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
            $table->integer('user_id')->unsigned();
            $table->integer('acceptedBy')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('file');
            $table->string('body');
            $table->string('votes');
            
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
            $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onDelete('cascade');
            
            $table->foreign('acceptedBy')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onDelete('cascade');
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
