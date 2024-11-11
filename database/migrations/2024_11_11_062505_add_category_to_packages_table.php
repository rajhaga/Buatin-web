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
        Schema::table('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category'); // Add category column
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->string('category')->after('name'); // Add the category column after name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            Schema::table('packages', function (Blueprint $table) {
                $table->dropColumn('category'); // Remove the category column
            });
        });
    }
};
