<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemeFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meme_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('meme_id');
            $table->text('location');
            $table->string('type')->default(0);
            $table->timestamps();

            $table->foreign('meme_id')
                ->references('id')
                ->on('meme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meme_files');
    }
}
