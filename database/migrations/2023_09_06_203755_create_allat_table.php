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
        Schema::create('allat', function (Blueprint $table) {
            $table->id("a_id");
            $table->foreignId("af_id")->references("af_id")->on("allat_faj")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("m_id")->references("m_id")->on("menhely")->onDelete('cascade')->onUpdate('cascade');
            $table->smallInteger("kor");
            $table->tinyInteger("ivar_allapot");
            $table->string("nev", 50);
            $table->string("nem", 50);
            $table->tinyInteger("chip");
            $table->text("leiras");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allat');
    }
};
