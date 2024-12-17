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
        Schema::create('kntctpxuat', function (Blueprint $table) {
            $table->char('KNTSoPX',4);
            $table->char('KNTMaVT', 4);
            $table->integer('KNTSlXuat');
            $table->float('KNTDGXuat');
            $table->primary(['KNTSoPX','KNTMaVT']);
            $table->foreign('KNTSoPX')->references('KNTSoPX')->on('kntpxuat');
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
