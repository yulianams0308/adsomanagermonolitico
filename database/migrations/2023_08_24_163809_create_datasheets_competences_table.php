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
        Schema::create('datasheets_competences', function (Blueprint $table) {
            $table->id();

            $table->string('observacion');
            $table->unsignedBigInteger('id_ficha')->nullable();
            $table->foreign('id_ficha')
            ->references('id')
            ->on('datasheets')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_competence');
            $table->foreign('id_competence')
            ->references('id')
            ->on('competences')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasheets_competences');
    }
};
