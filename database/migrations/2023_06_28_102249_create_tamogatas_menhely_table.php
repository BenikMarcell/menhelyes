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
        Schema::create('tamogatas_menhely', function (Blueprint $table) {
            $table->id("ma_id");
            $table->foreignId("m_id")->references("m_id")->on("menhelyek");
            $table->foreignId("payment_id");
            $table->integer("osszeg");
            $table->string("megjegyzes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamogatas_menhely');
    }
};
