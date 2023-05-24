<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('alshatb_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ques_number');
            $table->string('question') ;
            $table->integer('box_id')->unsigned();
            $table->foreign('box_id')->references('id')->on('other_boxes')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('alshatb_lists');
    }
};
