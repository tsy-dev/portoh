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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id('portofolio_id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('gambar')->nullable(); 
            $table->string('link')->nullable();
            $table->enum('kategori', ['Design', 'UI/UX', 'App/Web']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
