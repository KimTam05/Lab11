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
        Schema::create('kntctpnhap', function (Blueprint $table) {
            $table->char('KNTSoPN',4);
            $table->char('KNTMaVT', 4);
            $table->integer('KNTSlNhap');
            $table->float('KNTDGNhap');
            $table->primary(['KNTSoPN','KNTMaVT']);
            $table->foreign('KNTSoPN')->references('KNTSoPN')->on('kntpnhap');
            $table->foreign('KNTMaVT')->references('KNTMaVT')->on('kntvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntctpxuat');
    }
};
