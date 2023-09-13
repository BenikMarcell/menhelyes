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
        Schema::create('allat_kep', function (Blueprint $table) {
            $table->id("ak_id");
            $table->foreignId("a_id")->references("a_id")->on("allat") ->onDelete('cascade')->onUpdate('cascade');
            $table->string("kep_cim", 50);
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
        Schema::dropIfExists('allat_kep');
    }
};
