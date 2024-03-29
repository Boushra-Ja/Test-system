<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->Double('basal') ;
            $table->integer('additional') ;
            $table->integer('age') ;
            $table->integer('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('children')->constrained()->onDelete('cascade');
            $table->integer('dim_id')->unsigned();
            $table->foreign('dim_id')->references('id')->on('portage_diminssions')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_results');
    }
};
