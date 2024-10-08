<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    public function up()
    {
        Schema::create('Songs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('genre'); // Или foreign key, если у тебя жанры в отдельной таблице
            $table->string('file_path'); // Путь к файлу трека
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Songs');
    }
}