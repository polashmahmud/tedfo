<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamps();
        });

        //  // Create table for associating roles to users (Many-to-Many)
        //  Schema::create('categori_post', function (Blueprint $table) {
        //     $table->integer('categori_id')->unsigned();
        //     $table->integer('post_id')->unsigned();

        //     $table->foreign('categori_id')->references('id')->on('categoris')
        //         ->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('post_id')->references('id')->on('posts')
        //         ->onUpdate('cascade')->onDelete('cascade');

        //     $table->primary(['categori_id', 'post_id']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('categori_post');
        Schema::dropIfExists('categories');
    }
}
