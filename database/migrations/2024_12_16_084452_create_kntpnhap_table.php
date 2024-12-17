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
        Schema::create('kntpnhap', function (Blueprint $table) {
            $table->char('KNTSoPN',4)->primary();
            $table->dateTime('KNTNgaynhap');
            $table->string('KNTTenKH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntpnhap');
    }
};
