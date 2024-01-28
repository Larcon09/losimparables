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
        Schema::create('ganadores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('token_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('premio_id')->unsigned();
            $table->timestamps();

            $table->foreign('token_id')->references('id')->on('tokens')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('premio_id')->references('id')->on('premios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganadores');
    }
};
