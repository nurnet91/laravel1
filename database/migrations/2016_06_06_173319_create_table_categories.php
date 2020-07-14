<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategories extends Migration {
    
    public function up() {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('text');
            $table->string('foto');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('categories');
    }
    
}
