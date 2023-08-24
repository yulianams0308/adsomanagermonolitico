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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('observacion');
            $table->unsignedBigInteger('id_ficha')->nullable();
            $table->foreign('id_ficha')
            ->references('id')
            ->on('datasheets')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id_ambiente')->nullable();
            $table->foreign('id_ambiente')
            ->references('id')
            ->on('rooms')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
