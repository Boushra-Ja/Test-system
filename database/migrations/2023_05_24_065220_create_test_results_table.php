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
            $table->integer('Basal_Social') ;
            $table->integer('Total_Social') ;
            $table->integer('Basal_Motor') ;
            $table->integer('Total_Motor') ;
            $table->integer('Basal_Connection') ;
            $table->integer('Total_Connection') ;
            $table->integer('Basal_Cognitive') ;
            $table->integer('Total_Cognitive') ;
            $table->integer('Basal_Care') ;
            $table->integer('Total_Care') ;
            $table->integer('child_id')->unsigned();
            $table->foreign('child_id')->references('id')->on('children')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_results');
    }
};
