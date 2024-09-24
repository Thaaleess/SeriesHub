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
        Schema::table('user_season', function (Blueprint $table) {
            $table->unsignedBigInteger('series_id')->after('season_id');
    
            // Adicione uma chave estrangeira se necessário
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_season', function (Blueprint $table) {
            //
        });
    }
};