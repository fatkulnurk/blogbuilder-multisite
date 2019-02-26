<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subdomain');
            $table->unsignedInteger('domain_id');

            $table->unique(['subdomain','domain_id']);

            $table->string('title');
            $table->string('short_desc');
            $table->string('description');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_blog_id');
            $table->unsignedInteger('template_dekstop')->default(null);
            $table->integer('template_dekstop_status')->default(\App\Enum\StatusTemplateEnum::ON);
            $table->unsignedInteger('template_mobile')->default(null);
            $table->integer('templte_mobile_status')->default(\App\Enum\StatusTemplateEnum::OFF);
            $table->text('meta_header')->nullable();
            $table->text('meta_footer')->nullable();
            $table->string('logo');
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
        Schema::dropIfExists('blog');
    }
}
