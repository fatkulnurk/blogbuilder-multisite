<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateLibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_lib', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('stylesheet');
            $table->text('script_header')->default(null)->nullable();
            $table->text('script_post_up')->default(null)->nullable();
            $table->text('script_post_down')->default(null)->nullable();
            $table->text('script_nav_up')->default(null)->nullable();
            $table->text('script_nav_down')->default(null)->nullable();
            $table->text('script_footer')->default(null)->nullable();

            $table->text('code_header')->default(null)->nullable();
            $table->text('code_footer')->default(null)->nullable();
            $table->text('code_index')->default(null)->nullable();
            $table->text('code_search')->default(null)->nullable();
            $table->text('code_page')->default(null)->nullable();
            $table->text('code_post')->default(null)->nullable();
            $table->text('code_about')->default(null)->nullable();
            $table->text('code_404')->default(null)->nullable();
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
        Schema::dropIfExists('template_lib');
    }
}
