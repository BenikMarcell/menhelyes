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
        Schema::create('tamogatas_allat', function (Blueprint $table) {
            $table->id("at_id");
            $table->foreignId("a_id")->references("a_id")->on("allat")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("payment_id");
            $table->integer("osszeg");
            $table->string("megjegyzes")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamogatas_allat');
    }
};