<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPageKeyPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page', function (Blueprint $table) {
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
        Schema::table('page', function (Blueprint $table) {
            $table->dropForeign(['blog_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
