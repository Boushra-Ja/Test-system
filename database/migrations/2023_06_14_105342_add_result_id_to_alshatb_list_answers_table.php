<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('alshatb_list_answers', function (Blueprint $table) {
            $table->integer('result_id')->unsigned();
            $table->foreign('result_id')->references('id')->on('result_lists')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alshatb_list_answers', function (Blueprint $table) {
            //
        });
    }
};
