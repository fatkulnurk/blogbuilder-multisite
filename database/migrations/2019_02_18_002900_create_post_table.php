<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->string('thumbnail')->default(null);
            $table->string('slug');
            $table->string('label');
            $table->string('status')->default(\App\Enum\StatusPostEnum::PUBLISH);
            $table->string('privilege')->nullable();
            $table->unsignedInteger('category_post_id');
            $table->unsignedInteger('blog_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('update_user_id')->nullable();

            $table->unique(['slug', 'blog_id']);

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
        Schema::dropIfExists('post');
    }
}
