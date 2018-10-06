<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description')->comment('分类描述');
            $table->string('icon')->comment('图标');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}