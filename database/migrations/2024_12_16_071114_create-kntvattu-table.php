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
        Schema::create('kntvattu', function (Blueprint $table) {
            $table->char('KNTMaVT', 4)->primary();
            $table->string('KNTTenVT', 100)->unique();
            $table->string('KNtDvtinh',10);
            $table->float('KNTPhantram');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntvattu');
    }
};
