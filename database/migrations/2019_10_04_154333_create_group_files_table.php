<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('group_post_id');
            $table->text('location');
            $table->timestamps();

            $table->foreign('group_post_id')
                ->references('id')
                ->on('group_post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_files');
    }
}
