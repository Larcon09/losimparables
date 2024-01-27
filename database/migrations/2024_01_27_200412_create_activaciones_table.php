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
        Schema::create('activaciones', function (Blueprint $table) {
            $table->id();
            $table->string('min')->max(6);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('ciudad_id');
            $table->unsignedInteger('cav_id');
            $table->date('fecha_de_reporte');
            $table->timestamp('fecha_de_ingreso', $precision = 0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('ciudad_id')->references('ciudad')->on('user');
            $table->foreign('cav_id')->references('cav')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activaciones');
    }
};
