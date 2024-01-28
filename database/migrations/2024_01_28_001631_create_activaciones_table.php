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

            $table->engine="InnoDB";
            $table->id();
            $table->string('min')->max(6);
            $table->bigInteger('user_id')->unsigned();
            $table->Integer('ciudad');
            $table->Integer('cav');
            $table->date('fecha_de_reporte');
            $table->timestamp('fecha_de_ingreso', $precision = 0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
