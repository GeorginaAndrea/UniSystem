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
        Schema::table('materia', function (Blueprint $table) {
            $table->unsignedInteger('Semestre')->default(1);
        $table->unsignedBigInteger('ClaveCarrera')->nullable();

        $table->foreign('ClaveCarrera')->references('ClaveCarrera')->on('carrera');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materia', function (Blueprint $table) {
            $table->dropForeign(['ClaveCarrera']);
            $table->dropColumn(['Semestre', 'ClaveCarrera']);
        });
    }
};
