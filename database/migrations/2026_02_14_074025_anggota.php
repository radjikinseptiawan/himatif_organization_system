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
        Schema::create("anggota",function (Blueprint $table){
            $table->id("anggota_id");
            $table->string("nama_anggota");
            $table->string("jabatan_anggota");
            $table->string("departemen_anggota");
            $table->string("foto_anggota")->default("instagram.png");
            $table->timestamps();
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
