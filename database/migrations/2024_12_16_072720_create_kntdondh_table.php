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
        Schema::create('kntdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->char('KNTSoDH', 4)->primary();
            $table->dateTime('KNTNgayDH');
            $table->char('KNTMaNCC', 3);
            $table->foreign('KNTMaNCC')->references('KNTManhacc')->on('kntnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntdondh');
    }
};
