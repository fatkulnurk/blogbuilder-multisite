<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemeTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meme_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meme_id');
            $table->unsignedBigInteger('meme_tags_id');
            $table->timestamps();



            $table->foreign('meme_id')
                ->references('id')
                ->on('meme');

            $table->foreign('meme_tags_id')
                ->references('id')
                ->on('meme_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meme_tag');
    }
}
