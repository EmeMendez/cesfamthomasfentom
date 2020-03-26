<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('post_id');


            $table->foreign('image_id')->references('id')->on('images')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('post_id')->references('id')->on('posts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');     

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
        Schema::dropIfExists('post_image');
    }
}
