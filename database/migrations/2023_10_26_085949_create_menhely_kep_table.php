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
        Schema::create('menhely_kep', function (Blueprint $table) {
            $table->id("mk_id"); // menhely kép id
            $table->foreignId("m_id")->references("m_id")->on("menhely") ->onDelete('cascade')->onUpdate('cascade');
            $table->string("kepCim", 50);
            $table->text("src")->nullable();
            $table->string("alt")->nullable();
            $table->text("leiras")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menhely_kep');
    }
};
