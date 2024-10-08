<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('artist');
            $table->string('name');
            $table->string('genre'); 
            $table->string('file_path'); 
            $table->string('file_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
