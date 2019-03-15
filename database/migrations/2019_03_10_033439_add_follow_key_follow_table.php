<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFollowKeyFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('follow', function (Blueprint $table) {
            $table->foreign('user_one')
                ->references('id')
                ->on('users');

            $table->foreign('user_two')
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
        Schema::table('follow', function (Blueprint $table) {
            $table->dropForeign(['user_one']);
            $table->dropForeign(['user_two']);
        });
    }
}
