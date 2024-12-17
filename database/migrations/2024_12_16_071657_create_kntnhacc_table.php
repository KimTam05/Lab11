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
        Schema::create('kntnhacc', function (Blueprint $table) {
            // $table->id();
            $table->char('KNTManhacc', 3)->primary();
            $table->string('KNTTennhacc',100)->unique();
            $table->string('KNTDiachi',200);
            $table->string('KNTDienthoai',20);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntnhacc');
    }
};
