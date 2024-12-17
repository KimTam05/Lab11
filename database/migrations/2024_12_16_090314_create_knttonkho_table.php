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
        Schema::create('knttonkho', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->char('KNTNamThang', 6);
            $table->char('KNTMaVT',4);
            $table->integer('KNTTongSLDau');
            $table->integer('KNTTongSLSau');
            $table->integer('KNTSLCuoi');
            $table->primary(['KNTNamThang', 'KNTMaVT']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knttonkho');
    }
};
