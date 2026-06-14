<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('consultas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email');
        $table->text('mensaje');
        // El truco: por defecto arranca en false (No leída)
        $table->boolean('leida')->default(false); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
