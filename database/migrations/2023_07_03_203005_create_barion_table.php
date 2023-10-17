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
        Schema::create('barion', function (Blueprint $table) {
            $table->id("bt_id");
            $table->foreignId("m_id")->references("m_id")->on("menhely")->onDelete('cascade')->onUpdate('cascade');
            $table->string("payment_id");
            $table->string("status");
            $table->string("letrehozas_ideje");
            $table->string("total");
            $table->string("fizetes_ideje");
            $table->string("get_data");
            $table->datetime("beerkezes_idopontja");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barion');
    }
};
