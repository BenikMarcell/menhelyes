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
        Schema::create('allatok', function (Blueprint $table) {
            $table->id("a_id");
            $table->integer("af_id");
            $table->smallInteger("kor");
            $table->tinyInteger("ivar-allapot");
            $table->string("nev", 50);
            $table->tinyInteger("chip");
            $table->text("leiras");
            $table->integer("m_id");

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allatok');
    }
};
