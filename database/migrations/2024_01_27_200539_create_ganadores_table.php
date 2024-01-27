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
            $table->id();
            $table->unsignedInteger('token_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('premio_id');
            $table->timestamps();

            $table->foreign('token_id')->references('id')->on('token');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('premio_id')->references('id')->on('premio');
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
