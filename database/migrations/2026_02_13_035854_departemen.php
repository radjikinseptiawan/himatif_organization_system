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
        Schema::create("departemens",function(Blueprint $table){
            $table->id();
            $table->string("nama_departemen");
            $table->text("visi_departemen");
            $table->string("abbreviation");
            $table->string("lambang_departemen")->nullable();
            $table->timestamps();
        }); 


        Schema::create("misi_departemens",function(Blueprint $table){
            $table->id();
            $table->foreignId("departemen_id")->constrained("departemens")->onDelete("cascade");
            $table->text("misi");
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
