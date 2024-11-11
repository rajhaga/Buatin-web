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
        // Schema::create('posts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->date('posted_at');
        //     $table->text('content');
        //     $table->timestamps();
        // });

        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->timestamps();
        // });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->enum('role', ['user', 'admin'])->default('user'); // Hanya user atau admin
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
