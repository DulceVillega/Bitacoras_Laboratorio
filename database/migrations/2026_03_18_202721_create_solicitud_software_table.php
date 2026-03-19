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
        Schema::create('solicitud_software', function (Blueprint $table) {

            $table->id('idsolSoftware');

            // Relación con usuario (docente)
            $table->foreignId('idusuario')->constrained('users');

            // Relación con laboratorio
            $table->unsignedBigInteger('idlab');

            $table->foreign('idlab')
                ->references('idlab')
                ->on('laboratorio')
                ->onDelete('cascade');

            $table->string('software');
            $table->date('fecsolicitud');
            $table->string('estado')->default('Pendiente');
            $table->text('comentario')->nullable();
            $table->date('fecinstalacion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_software');
    }
};
