<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('project_category_id')->unsigned();
            $table->string('title_en', 255);
            $table->string('title_jp', 255);
            $table->text('slug');
            $table->text('image')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_jp')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_jp')->nullable();
            $table->tinyInteger('is_active');
            $table->string('created_by', 100);
            $table->string('updated_by', 100);
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
        Schema::dropIfExists('projects');
    }
}
