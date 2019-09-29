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
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('stylesheet');
            $table->longText('javascript');

            $table->text('code_header')->default(null)->nullable();
            $table->text('code_footer')->default(null)->nullable();
            $table->text('code_index')->default(null)->nullable();
            $table->text('code_category')->default(null)->nullable();
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
