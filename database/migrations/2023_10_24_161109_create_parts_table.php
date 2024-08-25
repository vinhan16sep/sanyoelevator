<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->nullable();
            $table->string('title', 255);
            $table->string('code', 255);
            $table->text('image')->nullable();
            $table->string('type', 255)->nullable();
            $table->string('load', 255)->nullable();
            $table->string('speed', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_active');
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
        Schema::dropIfExists('parts');
    }
}
