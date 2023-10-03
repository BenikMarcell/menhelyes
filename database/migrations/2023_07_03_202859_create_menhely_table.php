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
        Schema::create('menhely', function (Blueprint $table) {
            $table->id("m_id");
            $table->string("u_id")->references("id")->on("users");
            $table->string("nev");
            $table->string("irsz");
            $table->string("telepules");
            $table->string("utca_hsz");
            $table->string("bankszamla_sz");
            $table->string("nyilv_szam");
            $table->string("adoszam");
            $table->string("email");
            $table->string("telefon");
            $table->text("menhely_leiras");
            $table->string("weblink");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menhely');
    }
};
