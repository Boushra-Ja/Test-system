<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('difficult_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('difficult_titles')->constrained()->onDelete('cascade');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('difficult_titles')->constrained()->onDelete('cascade');
            $table->string('question');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('difficult_questions');
    }
};
