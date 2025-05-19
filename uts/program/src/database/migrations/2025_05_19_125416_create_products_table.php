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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bunga')->nullable();                   
            $table->enum('jenis_bunga', ['potong', 'hias', 'kering', 'bouquet'])->nullable();                
            $table->string('warna')->nullable();                       
            $table->bigInteger('stok')->nullable();                     
            $table->decimal('harga_satuan', 12, 2)->nullable();                                       
            $table->text('deskripsi')->nullable();                     
            $table->string('image')->nullable();                   
            // $table->enum('status_ketersediaan', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
