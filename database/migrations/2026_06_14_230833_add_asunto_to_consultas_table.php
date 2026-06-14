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
        Schema::table('consultas', function (Blueprint $table) {
        // Agregamos la columna nueva. Le ponemos ->nullable() por seguridad 
        // para que las consultas viejas que no tenían asunto no rompan la BD.
        $table->string('asunto')->nullable()->after('email'); 
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultas', function (Blueprint $table) {
        $table->dropColumn('asunto');
    });
    }
};
