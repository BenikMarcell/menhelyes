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
        Schema::create('users_jogkorei', function (Blueprint $table) {
            $table->id("ujk_id");
            $table->foreignId("u_id")->references("u_id")->on("users")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("uj_id")->references("uj_id")->on("users_jogkorok")->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_jogkorei');
    }
};
