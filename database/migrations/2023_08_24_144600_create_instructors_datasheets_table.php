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
        Schema::create('instructors_datasheets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_isntructor');
            $table->foreign('id_isntructor')
            ->references('id')
            ->on('instructors')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_ficha');
            $table->foreign('id_ficha')
            ->references('id')
            ->on('datasheets')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors_datasheets');
    }
};
