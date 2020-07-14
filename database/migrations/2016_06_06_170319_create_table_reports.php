<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReports extends Migration {

    public function up() {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('text_sh');
            $table->text('text');
            $table->integer('category_id');
            $table->integer('rukn_id');
            $table->integer('number_id');
            $table->string('foto');
            $table->integer('readed');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('reports');
    }

}
