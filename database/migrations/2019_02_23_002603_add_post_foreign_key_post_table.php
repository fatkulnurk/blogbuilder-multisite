<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostForeignKeyPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post', function (Blueprint $table) {

            $table->foreign('category_post_id')
                ->references('id')
                ->on('category_post');

            $table->foreign('blog_id')
                ->references('id')
                ->on('blog');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropForeign(['category_post_id']);
            $table->dropForeign(['blog_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
