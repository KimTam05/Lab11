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
        Schema::create('kntctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->char('KNTSoDH', 4);
            $table->char('KNTMaVT', 4);
            $table->integer('KNTSldat');
            $table->primary(['KNTSoDH','KNTMaVT']);
            $table->foreign('KNTSoDH')->references('KNTSoDH')->on('kntdondh');
            $table->foreign('KNTMaVT')->references('KNTMaVT')->on('kntvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntctdondh');
    }
};
