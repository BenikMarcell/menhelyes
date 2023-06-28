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
        Schema::create('allatszinek', function (Blueprint $table) {
            $table->id("asz_id");
            $table->foreignId("a_id")->references("a_id")->on("allatok");
            $table->foreignId("szin_id")->references("szin_id")->on("szin");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allatszinek');
    }
};
