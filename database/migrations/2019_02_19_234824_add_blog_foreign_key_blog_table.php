<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBlogForeignKeyBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->foreign('domain_id')
                ->references('id')
                ->on('domain');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');;

            $table->foreign('category_blog_id')
                ->references('id')
                ->on('category_blog');

            $table->foreign('template_mobile')
                ->references('id')
                ->on('template');

            $table->foreign('template_dekstop')
                ->references('id')
                ->on('template');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->dropForeign(['domain_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['category_blog_id']);
            $table->dropForeign(['template_mobile']);
            $table->dropForeign(['template_dekstop']);
        });
    }
}
