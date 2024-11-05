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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('category');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('video')->nullable(); // Menambahkan kolom untuk video (URL)
            $table->date('date')->nullable(); // Menambahkan kolom untuk tanggal
            $table->string('pdf')->nullable(); // Menambahkan kolom untuk PDF
            $table->text('video_url')->nullable(); // Kolom untuk menyimpan link video (nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
