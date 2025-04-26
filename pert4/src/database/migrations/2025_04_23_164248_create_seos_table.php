<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('keywords')->nullable();
            $table->string('author')->nullable(); 
            $table->string('favicon')->nullable(); 
            $table->string('logo')->nullable(); 
            $table->string('og_image')->nullable(); 
            $table->string('og_title')->nullable(); 
            $table->string('og_description')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_type')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
