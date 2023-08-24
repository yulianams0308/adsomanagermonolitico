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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre del resultado');
            $table->string('Descripcion');
            $table->time('Horas');
            $table->string('Formato de concertacion');
            $table->date('Fecha inicio');
            $table->date('Fecha fin');

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
        Schema::dropIfExists('results');
    }
};
