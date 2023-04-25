<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('boxes', function (Blueprint $table) {
            $table->integer('dim_id')->unsigned();
            $table->foreign('dim_id')->references('id')->on('portage_diminssions')->constrained()->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::table('boxes', function (Blueprint $table) {
            $table->dropColumn('dim_id') ;
        });
    }
};
