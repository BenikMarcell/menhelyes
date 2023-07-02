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
        Schema::create('menhelyek', function (Blueprint $table) {
            $table->id("m_id");
            $table->string("u_id")->references("u_id")->on("users");
            $table->string("bt_id")->references("bt_id")->on("barion_tranzakcio");
            $table->string("menhely_nev");
            $table->string("menhely_irsz");
            $table->string("menhely_telepules");
            $table->string("menhely_utca_sz");
            $table->string("menhely_banksz_szam");
            $table->string("menhely_nyilv_sz");
            $table->string("menhely_adoszam");
            $table->string("menhely_email");
            $table->string("menhely_telefon");
            $table->text("menhely_leiras");
            $table->string("menhely_weblink");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menhelyek');
    }
};
