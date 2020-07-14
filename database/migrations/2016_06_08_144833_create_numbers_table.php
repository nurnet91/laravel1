<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumbersTable extends Migration {

    public function up() {
        Schema::create('numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('text');
            $table->string('foto');
            $table->integer('son');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('numbers');
    }
}
